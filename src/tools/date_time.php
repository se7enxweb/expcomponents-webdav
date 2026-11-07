<?php
/**
 * File containing the ezcWebdavDateTime class.
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Webdav
 * @version //autogentag//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * DateTime class with serialization support.
 *
 * The PHP 5.2 {@link DateTime} class does not support
 * serialization/deserialization with maintaining the stored time information.
 * This class extends DateTime to solve the issue, which is needed especially
 * when working with persistent {@link ezcWebdavMemoryBackend} instances.
 * 
 * @package Webdav
 * @version //autogen//
 */
class ezcWebdavDateTime extends DateTime
{
    /**
     * Stores the backup time in RFC 2822 format when being serialized.
     * 
     * @var string
     */
    private $backupTime;

    /**
     * Backup the currently stored time.
     *
     * This method is called right before serialization of the object. It backs
     * up the current time information as an RCF 2822 formatted string and
     * returns the name of the property this value is stored inside as an array
     * to indicate that this property should be serialized.
     * 
     * @return array(int=>string)
     */
    public function __sleep()
    {
        $this->backupTime = $this->format( 'r' );
        return array( 'backupTime' );
    }

    /**
     * Restores the backeuped time.
     *
     * This method is automatically called after deserializing the object and
     * restores the backed up time information.
     * 
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function __wakeup()
    {
        $this->__construct( $this->backupTime );
    }

    /**
     * Serializes the date in the same form as __sleep() (PHP 7.4 and later
     * use this method instead of __sleep()).
     *
     * @return array
     */
    public function __serialize(): array
    {
        return array( 'backupTime' => $this->format( 'r' ) );
    }

    /**
     * Restores the date from what __serialize(), __sleep() or
     * DateTime::__serialize() wrote.
     *
     * Since PHP 8.2 DateTime has its own __unserialize(), which PHP calls
     * instead of __wakeup() and which cannot read the "backupTime" data of
     * earlier versions; this method reads all of them.
     *
     * @param array $data
     * @return void
     */
    public function __unserialize( array $data ): void
    {
        foreach ( array( 'backupTime', "\0ezcWebdavDateTime\0backupTime" ) as $key )
        {
            if ( isset( $data[$key] ) )
            {
                $this->__construct( $data[$key] );
                return;
            }
        }
        if ( isset( $data['date'], $data['timezone'] ) )
        {
            $this->__construct( $data['date'], new DateTimeZone( $data['timezone'] ) );
            return;
        }
        throw new UnexpectedValueException( 'Invalid serialization data for ezcWebdavDateTime object' );
    }
}

?>
