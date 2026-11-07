<?php
return array (
  1 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/',
        'REDIRECT_URI' => '/index.php/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>6666cd76f96956469e7be39d750cc7d9</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>9696c0fa460d4ed148cb40b2e8388c1e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified/>
        <D:getcontentlength/>
        <D:getcontenttype/>
        <D:resourcetype/>
        <D:getetag/>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 403 Forbidden</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>b0c5faef67f106ef634ad2a82e838b95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>19</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/file.bin</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream; charset="utf-8"</D:getcontenttype>
        <D:getetag>68eab65ab82e7e474811d5d2dd879679</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>7</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  2 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/',
        'REDIRECT_URI' => '/index.php/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>9696c0fa460d4ed148cb40b2e8388c1e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>60c0afeb8f68b1765e13694b5e7c8c3d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  3 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/',
        'REDIRECT_URI' => '/index.php/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>9696c0fa460d4ed148cb40b2e8388c1e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>60c0afeb8f68b1765e13694b5e7c8c3d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  4 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/file.txt',
        'REDIRECT_URI' => '/index.php/collection/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/file.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Some text content.',
      'headers' => 
      array (
        'ETag' => '60c0afeb8f68b1765e13694b5e7c8c3d',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  5 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>3b191a38c8e5d686506677906f3a4cfd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>8cc4e8038561985cf9e68ee3e36f8882</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  6 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '0',
        'PHP_SELF' => '/index.php/collection/subdir/newdir',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  7 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>8887bec8c9eca1eafc8f299e0765984f</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  8 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>8887bec8c9eca1eafc8f299e0765984f</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  9 => 
  array (
    'request' => 
    array (
      'body' => 'Some text content.',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '18',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/file.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '18',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/file.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'd7d5492acf7f2f11647278924f7586ba',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  10 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>8887bec8c9eca1eafc8f299e0765984f</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>d7d5492acf7f2f11647278924f7586ba</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  11 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '0',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/newsubdir',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  12 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/newsubdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>1361830dfedbf9efdc5bc1636ffab67c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  13 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/newsubdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>1361830dfedbf9efdc5bc1636ffab67c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  14 => 
  array (
    'request' => 
    array (
      'body' => 'Some text content.',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '18',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '18',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/newsubdir/file.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '3c9be7330d80dfd9acee27eb9017f47c',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  15 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/newsubdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>1361830dfedbf9efdc5bc1636ffab67c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3c9be7330d80dfd9acee27eb9017f47c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  16 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/newsubdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>1361830dfedbf9efdc5bc1636ffab67c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3c9be7330d80dfd9acee27eb9017f47c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  17 => 
  array (
    'request' => 
    array (
      'body' => 'Some text content.',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '18',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '18',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/newsubdir/file.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '3c9be7330d80dfd9acee27eb9017f47c',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  18 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/newsubdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>1361830dfedbf9efdc5bc1636ffab67c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3c9be7330d80dfd9acee27eb9017f47c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  19 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>8887bec8c9eca1eafc8f299e0765984f</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>d7d5492acf7f2f11647278924f7586ba</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir/newsubdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>1361830dfedbf9efdc5bc1636ffab67c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  20 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>3b191a38c8e5d686506677906f3a4cfd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>8cc4e8038561985cf9e68ee3e36f8882</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>8887bec8c9eca1eafc8f299e0765984f</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  21 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>3b191a38c8e5d686506677906f3a4cfd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>8cc4e8038561985cf9e68ee3e36f8882</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>8887bec8c9eca1eafc8f299e0765984f</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  22 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/newdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  23 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>3b191a38c8e5d686506677906f3a4cfd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>8cc4e8038561985cf9e68ee3e36f8882</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  24 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/file.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/file.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/file.html',
        'REDIRECT_URI' => '/index.php/collection/subdir/file.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/file.html',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<html><body><h1>Test</h1></body></html>',
      'headers' => 
      array (
        'ETag' => '3b191a38c8e5d686506677906f3a4cfd',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/html; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  25 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/file.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/file.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/file.xml',
        'REDIRECT_URI' => '/index.php/collection/subdir/file.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/file.xml',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml?>
<content/>',
      'headers' => 
      array (
        'ETag' => '8cc4e8038561985cf9e68ee3e36f8882',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  26 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>3b191a38c8e5d686506677906f3a4cfd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>8cc4e8038561985cf9e68ee3e36f8882</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  27 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/file.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/file.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/file.html',
        'REDIRECT_URI' => '/index.php/collection/subdir/file.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/file.html',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  28 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/file.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/file.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/file.xml',
        'REDIRECT_URI' => '/index.php/collection/subdir/file.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/file.xml',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  29 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  30 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="generator" content="Docutils 0.4: http://docutils.sourceforge.net/" /><title>eZ component: Webdav, Design, 1.0</title><meta name="author" content="Kore Nordmann, Tobias Schlitt" /><meta name="date" content="$Date$" /><style type="text/css">

/*
:Author: David Goodger
:Contact: goodger@users.sourceforge.net
:Date: $Date: 2005-12-18 01:56:14 +0100 (Sun, 18 Dec 2005) $
:Revision: $Revision: 4224 $
:Copyright: This stylesheet has been placed in the public domain.

Default cascading style sheet for the HTML output of Docutils.

See http://docutils.sf.net/docs/howto/html-stylesheets.html for how to
customize this style sheet.
*/

/* used to remove borders from tables and images */
.borderless, table.borderless td, table.borderless th {
  border: 0 }

table.borderless td, table.borderless th {
  /* Override padding for "table.docutils td" with "! important".
     The right padding separates the table cells. */
  padding: 0 0.5em 0 0 ! important }

.first {
  /* Override more specific margin styles with "! important". */
  margin-top: 0 ! important }

.last, .with-subtitle {
  margin-bottom: 0 ! important }

.hidden {
  display: none }

a.toc-backref {
  text-decoration: none ;
  color: black }

blockquote.epigraph {
  margin: 2em 5em ; }

dl.docutils dd {
  margin-bottom: 0.5em }

/* Uncomment (and remove this text!) to get bold-faced definition list terms
dl.docutils dt {
  font-weight: bold }
*/

div.abstract {
  margin: 2em 5em }

div.abstract p.topic-title {
  font-weight: bold ;
  text-align: center }

div.admonition, div.attention, div.caution, div.danger, div.error,
div.hint, div.important, div.note, div.tip, div.warning {
  margin: 2em ;
  border: medium outset ;
  padding: 1em }

div.admonition p.admonition-title, div.hint p.admonition-title,
div.important p.admonition-title, div.note p.admonition-title,
div.tip p.admonition-title {
  font-weight: bold ;
  font-family: sans-serif }

div.attention p.admonition-title, div.caution p.admonition-title,
div.danger p.admonition-title, div.error p.admonition-title,
div.warning p.admonition-title {
  color: red ;
  font-weight: bold ;
  font-family: sans-serif }

/* Uncomment (and remove this text!) to get reduced vertical space in
   compound paragraphs.
div.compound .compound-first, div.compound .compound-middle {
  margin-bottom: 0.5em }

div.compound .compound-last, div.compound .compound-middle {
  margin-top: 0.5em }
*/

div.dedication {
  margin: 2em 5em ;
  text-align: center ;
  font-style: italic }

div.dedication p.topic-title {
  font-weight: bold ;
  font-style: normal }

div.figure {
  margin-left: 2em ;
  margin-right: 2em }

div.footer, div.header {
  clear: both;
  font-size: smaller }

div.line-block {
  display: block ;
  margin-top: 1em ;
  margin-bottom: 1em }

div.line-block div.line-block {
  margin-top: 0 ;
  margin-bottom: 0 ;
  margin-left: 1.5em }

div.sidebar {
  margin-left: 1em ;
  border: medium outset ;
  padding: 1em ;
  background-color: #ffffee ;
  width: 40% ;
  float: right ;
  clear: right }

div.sidebar p.rubric {
  font-family: sans-serif ;
  font-size: medium }

div.system-messages {
  margin: 5em }

div.system-messages h1 {
  color: red }

div.system-message {
  border: medium outset ;
  padding: 1em }

div.system-message p.system-message-title {
  color: red ;
  font-weight: bold }

div.topic {
  margin: 2em }

h1.section-subtitle, h2.section-subtitle, h3.section-subtitle,
h4.section-subtitle, h5.section-subtitle, h6.section-subtitle {
  margin-top: 0.4em }

h1.title {
  text-align: center }

h2.subtitle {
  text-align: center }

hr.docutils {
  width: 75% }

img.align-left {
  clear: left }

img.align-right {
  clear: right }

ol.simple, ul.simple {
  margin-bottom: 1em }

ol.arabic {
  list-style: decimal }

ol.loweralpha {
  list-style: lower-alpha }

ol.upperalpha {
  list-style: upper-alpha }

ol.lowerroman {
  list-style: lower-roman }

ol.upperroman {
  list-style: upper-roman }

p.attribution {
  text-align: right ;
  margin-left: 50% }

p.caption {
  font-style: italic }

p.credits {
  font-style: italic ;
  font-size: smaller }

p.label {
  white-space: nowrap }

p.rubric {
  font-weight: bold ;
  font-size: larger ;
  color: maroon ;
  text-align: center }

p.sidebar-title {
  font-family: sans-serif ;
  font-weight: bold ;
  font-size: larger }

p.sidebar-subtitle {
  font-family: sans-serif ;
  font-weight: bold }

p.topic-title {
  font-weight: bold }

pre.address {
  margin-bottom: 0 ;
  margin-top: 0 ;
  font-family: serif ;
  font-size: 100% }

pre.literal-block, pre.doctest-block {
  margin-left: 2em ;
  margin-right: 2em ;
  background-color: #eeeeee }

span.classifier {
  font-family: sans-serif ;
  font-style: oblique }

span.classifier-delimiter {
  font-family: sans-serif ;
  font-weight: bold }

span.interpreted {
  font-family: sans-serif }

span.option {
  white-space: nowrap }

span.pre {
  white-space: pre }

span.problematic {
  color: red }

span.section-subtitle {
  /* font-size relative to parent (h1..h6 element) */
  font-size: 80% }

table.citation {
  border-left: solid 1px gray;
  margin-left: 1px }

table.docinfo {
  margin: 2em 4em }

table.docutils {
  margin-top: 0.5em ;
  margin-bottom: 0.5em }

table.footnote {
  border-left: solid 1px black;
  margin-left: 1px }

table.docutils td, table.docutils th,
table.docinfo td, table.docinfo th {
  padding-left: 0.5em ;
  padding-right: 0.5em ;
  vertical-align: top }

table.docutils th.field-name, table.docinfo th.docinfo-name {
  font-weight: bold ;
  text-align: left ;
  white-space: nowrap ;
  padding-left: 0 }

h1 tt.docutils, h2 tt.docutils, h3 tt.docutils,
h4 tt.docutils, h5 tt.docutils, h6 tt.docutils {
  font-size: 100% }

tt.docutils {
  background-color: #eeeeee }

ul.auto-toc {
  list-style-type: none }

</style></head><body><div class="document" id="ez-component-webdav-design-1-0"><h1 class="title">eZ component: Webdav, Design, 1.0</h1><table class="docinfo" frame="void" rules="none"><col class="docinfo-name" /><col class="docinfo-content" /><tbody valign="top"><tr><th class="docinfo-name">Author:</th><td>Kore Nordmann, Tobias Schlitt</td></tr><tr><th class="docinfo-name">Revision:</th><td>$Rev$</td></tr><tr><th class="docinfo-name">Date:</th><td>$Date$</td></tr><tr><th class="docinfo-name">Status:</th><td>Draft</td></tr></tbody></table><div class="contents topic"><p class="topic-title first"><a id="contents" name="contents">Contents</a></p><ul class="simple"><li><a class="reference" href="#scope" id="id1" name="id1">Scope</a></li><li><a class="reference" href="#design-overview" id="id2" name="id2">Design overview</a></li><li><a class="reference" href="#tiers" id="id3" name="id3">Tiers</a></li><li><a class="reference" href="#classes" id="id4" name="id4">Classes</a><ul><li><a class="reference" href="#ezcwebdavserver" id="id5" name="id5">ezcWebdavServer</a></li><li><a class="reference" href="#ezcwebdavbackend" id="id6" name="id6">ezcWebdavBackend</a></li><li><a class="reference" href="#ezcwebdavtransport" id="id7" name="id7">ezcWebdavTransport</a></li><li><a class="reference" href="#ezcwebdavpathfactory" id="id8" name="id8">ezcWebdavPathFactory</a></li></ul></li><li><a class="reference" href="#example-code" id="id9" name="id9">Example code</a></li></ul></div><div class="section"><h1><a class="toc-backref" href="#id1" id="scope" name="scope">Scope</a></h1><p>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> protocol.</p><p>It is currently not planned to also offer a WebDAV client component.</p></div><div class="section"><h1><a class="toc-backref" href="#id2" id="design-overview" name="design-overview">Design overview</a></h1><p>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</p><p>The main class of this component will provide a fully <a class="reference" href="http://tools.ietf.org/html/rfc2518">RFC 2518</a> compliant
implementation of a <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</p><p>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</p></div><div class="section"><h1><a class="toc-backref" href="#id3" id="tiers" name="tiers">Tiers</a></h1><p>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</p><p>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</p><p>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</p><p>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</p></div><div class="section"><h1><a class="toc-backref" href="#id4" id="classes" name="classes">Classes</a></h1><div class="section"><h2><a class="toc-backref" href="#id5" id="ezcwebdavserver" name="ezcwebdavserver">ezcWebdavServer</a></h2><p>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</p><p>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</p><p>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</p><p>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</p><p>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</p><p>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</p><p>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</p></div><div class="section"><h2><a class="toc-backref" href="#id6" id="ezcwebdavbackend" name="ezcwebdavbackend">ezcWebdavBackend</a></h2><p>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</p><ul class="simple"><li>head()</li><li>get()</li><li>propFind()</li><li>propFetch()</li></ul><p>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</p><p>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</p><p>The logical groups of capabilities are:</p><dl class="docutils"><dt>Put</dt><dd>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</dd><dt>Change</dt><dd>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</dd><dt>Make collection</dt><dd>The creation of new collections also makes up a capability unit and can
optionally be implemented.</dd><dt>Lock</dt><dd>If the hander provides locking facilities on its own, the main server object
must not take care about that.</dd><dt>GZIP-Compress</dt><dd>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</dd></dl><p>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</p></div><div class="section"><h2><a class="toc-backref" href="#id7" id="ezcwebdavtransport" name="ezcwebdavtransport">ezcWebdavTransport</a></h2><p>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</p><p>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</p><p>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</p><p>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</p><p>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</p><p>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</p><p>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</p><p>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</p></div><div class="section"><h2><a class="toc-backref" href="#id8" id="ezcwebdavpathfactory" name="ezcwebdavpathfactory">ezcWebdavPathFactory</a></h2><p>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</p><p>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</p><p>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</p><p>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</p><p>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</p><p>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</p></div></div><div class="section"><h1><a class="toc-backref" href="#id9" id="example-code" name="example-code">Example code</a></h1><p>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</p><pre class="literal-block">
    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();
</pre><!-- Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79 --></div></div></body></html>

',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '18675',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test.html',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '18675',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/put_test.html',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '42fa6b3c46b3066e7ce125d5c114877b',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  31 => 
  array (
    'request' => 
    array (
      'body' => 'This is an UTF-8 test file
==========================

This file contains a variaty of Unicode characters to test with the eZ Webdav
component.

Greek letters
-------------

Î‘ Î’ Î“ Î” Î• Î– Î— Î˜ Î™ Îš Î› Îœ Î Î ÎŸ Î  Î¡ Î£ Î¤ Î¥ Î¦ Î§ Î¨ Î© 

Î± Î² Î³ Î´ Îµ Î¶ Î· Î¸ Î¹ Îº Î» Î¼ Î½ Î¾ Î¿ Ï€ Ï Ïƒ Ï„ Ï… Ï• Ï‡ Ïˆ Ï‰

Mathematical characters
-----------------------

â„‚ â„• â„š â„ â„¤ âˆ€ âˆ âˆ‚ âˆƒ âˆ„ âˆ… âˆˆ âˆ‰ âˆ‹ âˆŒ âˆ âˆ âˆ âˆ âˆ‘ + âˆ’ âˆ“ âˆ• âˆ– âˆ— âˆ˜ âˆš âˆ› âˆœ âˆ âˆ âˆ£ âˆ¤ âˆ§ âˆ¨ âˆ© âˆª âˆ«
âˆ¬ âˆ­ = â‰” â‰• â‰™ â‰ â‰  â‰¡ â‰¢ < > â‰¤ â‰¥ â‰ª â‰« â‰® â‰¯ â‰° â‰± â‰º â‰» â‰¼ â‰½ âŠ€ âŠ âŠ‚ âŠƒ âŠ„ âŠ… âŠ† âŠ‡ âŠˆ âŠ‰ âŠ• âŠ– âŠ— âŠ™ âŠš
âŠ› âŠœ âŠ âŠ¢ âŠ£ âŠ¤ âŠ¥ âŠ§ âŠ¬ âŠ¶ âŠ· âŠ» âŠ¼ âŠ½ â€° â€± 

',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '740',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '740',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/put_test_utf8_content.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '03f21d9964e17d45d71164e30d8bbab5',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  32 => 
  array (
    'request' => 
    array (
      'body' => 'This is an UTF-8 test file
==========================

This file contains a variaty of Unicode characters to test with the eZ Webdav
component.

Greek letters
-------------

Î‘ Î’ Î“ Î” Î• Î– Î— Î˜ Î™ Îš Î› Îœ Î Î ÎŸ Î  Î¡ Î£ Î¤ Î¥ Î¦ Î§ Î¨ Î© 

Î± Î² Î³ Î´ Îµ Î¶ Î· Î¸ Î¹ Îº Î» Î¼ Î½ Î¾ Î¿ Ï€ Ï Ïƒ Ï„ Ï… Ï• Ï‡ Ïˆ Ï‰

Mathematical characters
-----------------------

â„‚ â„• â„š â„ â„¤ âˆ€ âˆ âˆ‚ âˆƒ âˆ„ âˆ… âˆˆ âˆ‰ âˆ‹ âˆŒ âˆ âˆ âˆ âˆ âˆ‘ + âˆ’ âˆ“ âˆ• âˆ– âˆ— âˆ˜ âˆš âˆ› âˆœ âˆ âˆ âˆ£ âˆ¤ âˆ§ âˆ¨ âˆ© âˆª âˆ«
âˆ¬ âˆ­ = â‰” â‰• â‰™ â‰ â‰  â‰¡ â‰¢ < > â‰¤ â‰¥ â‰ª â‰« â‰® â‰¯ â‰° â‰± â‰º â‰» â‰¼ â‰½ âŠ€ âŠ âŠ‚ âŠƒ âŠ„ âŠ… âŠ† âŠ‡ âŠˆ âŠ‰ âŠ• âŠ– âŠ— âŠ™ âŠš
âŠ› âŠœ âŠ âŠ¢ âŠ£ âŠ¤ âŠ¥ âŠ§ âŠ¬ âŠ¶ âŠ· âŠ» âŠ¼ âŠ½ â€° â€± 

',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '740',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '740',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'd2a20cb330bba15d6ead72369a42fa83',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  33 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>42fa6b3c46b3066e7ce125d5c114877b</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>03f21d9964e17d45d71164e30d8bbab5</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>d2a20cb330bba15d6ead72369a42fa83</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  34 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>42fa6b3c46b3066e7ce125d5c114877b</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>03f21d9964e17d45d71164e30d8bbab5</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>d2a20cb330bba15d6ead72369a42fa83</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  35 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>42fa6b3c46b3066e7ce125d5c114877b</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>03f21d9964e17d45d71164e30d8bbab5</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>d2a20cb330bba15d6ead72369a42fa83</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  36 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test.html',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/collection/subdir/put_test_renamed.xml',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'PHP_SELF' => '/index.php/collection/subdir/put_test.html',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  37 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>03f21d9964e17d45d71164e30d8bbab5</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>d2a20cb330bba15d6ead72369a42fa83</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3f3e5419aff5da5a5f9ef38c571ec272</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  38 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>03f21d9964e17d45d71164e30d8bbab5</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>d2a20cb330bba15d6ead72369a42fa83</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3f3e5419aff5da5a5f9ef38c571ec272</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  39 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/collection/subdir/put_test_non_utf8.txt',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'PHP_SELF' => '/index.php/collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  40 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>03f21d9964e17d45d71164e30d8bbab5</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3f3e5419aff5da5a5f9ef38c571ec272</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>88f535dffe3f6075a0a7461f40325aea</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  41 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>03f21d9964e17d45d71164e30d8bbab5</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3f3e5419aff5da5a5f9ef38c571ec272</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>88f535dffe3f6075a0a7461f40325aea</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  42 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'PHP_SELF' => '/index.php/collection/subdir/put_test_utf8_content.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  43 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3f3e5419aff5da5a5f9ef38c571ec272</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>88f535dffe3f6075a0a7461f40325aea</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>a22ba5f3f6bfe26a62130a37fa15133d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  44 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/collection',
        'REDIRECT_URI' => '/index.php/collection/subdir/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '0',
        'PHP_SELF' => '/index.php/collection/subdir/collection',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  45 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?><!DOCTYPE document PUBLIC "+//IDN docutils.sourceforge.net//DTD Docutils Generic//EN//XML" "http://docutils.sourceforge.net/docs/ref/docutils.dtd"><!-- Generated by Docutils 0.4 --><document ids="ez-component-webdav-design-1-0" names="ez\\ component:\\ webdav,\\ design,\\ 1.0" source="Webdav/design/design.txt" title="eZ component: Webdav, Design, 1.0"><title>eZ component: Webdav, Design, 1.0</title><docinfo><author>Kore Nordmann, Tobias Schlitt</author><revision>$Rev$</revision><date>$Date$</date><status>Draft</status></docinfo><topic classes="contents" ids="contents" names="contents"><title>Contents</title><bullet_list><list_item><paragraph><reference ids="id1" refid="scope">Scope</reference></paragraph></list_item><list_item><paragraph><reference ids="id2" refid="design-overview">Design overview</reference></paragraph></list_item><list_item><paragraph><reference ids="id3" refid="tiers">Tiers</reference></paragraph></list_item><list_item><paragraph><reference ids="id4" refid="classes">Classes</reference></paragraph><bullet_list><list_item><paragraph><reference ids="id5" refid="ezcwebdavserver">ezcWebdavServer</reference></paragraph></list_item><list_item><paragraph><reference ids="id6" refid="ezcwebdavbackend">ezcWebdavBackend</reference></paragraph></list_item><list_item><paragraph><reference ids="id7" refid="ezcwebdavtransport">ezcWebdavTransport</reference></paragraph></list_item><list_item><paragraph><reference ids="id8" refid="ezcwebdavpathfactory">ezcWebdavPathFactory</reference></paragraph></list_item></bullet_list></list_item><list_item><paragraph><reference ids="id9" refid="example-code">Example code</reference></paragraph></list_item></bullet_list></topic><section ids="scope" names="scope"><title refid="id1">Scope</title><paragraph>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> protocol.</paragraph><target ids="webdav" names="webdav" refuri="http://en.wikipedia.org/wiki/WebDAV"/><paragraph>It is currently not planned to also offer a WebDAV client component.</paragraph></section><section ids="design-overview" names="design\\ overview"><title refid="id2">Design overview</title><paragraph>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</paragraph><paragraph>The main class of this component will provide a fully <reference name="RFC 2518" refuri="http://tools.ietf.org/html/rfc2518">RFC 2518</reference> compliant
implementation of a <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</paragraph><target ids="rfc-2518" names="rfc\\ 2518" refuri="http://tools.ietf.org/html/rfc2518"/><paragraph>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</paragraph></section><section ids="tiers" names="tiers"><title refid="id3">Tiers</title><paragraph>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</paragraph><paragraph>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</paragraph><paragraph>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</paragraph><paragraph>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</paragraph></section><section ids="classes" names="classes"><title refid="id4">Classes</title><section ids="ezcwebdavserver" names="ezcwebdavserver"><title refid="id5">ezcWebdavServer</title><paragraph>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</paragraph><paragraph>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</paragraph><paragraph>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</paragraph><paragraph>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</paragraph><paragraph>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</paragraph><paragraph>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</paragraph><paragraph>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</paragraph></section><section ids="ezcwebdavbackend" names="ezcwebdavbackend"><title refid="id6">ezcWebdavBackend</title><paragraph>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</paragraph><bullet_list bullet="-"><list_item><paragraph>head()</paragraph></list_item><list_item><paragraph>get()</paragraph></list_item><list_item><paragraph>propFind()</paragraph></list_item><list_item><paragraph>propFetch()</paragraph></list_item></bullet_list><paragraph>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</paragraph><paragraph>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</paragraph><paragraph>The logical groups of capabilities are:</paragraph><definition_list><definition_list_item><term>Put</term><definition><paragraph>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</paragraph></definition></definition_list_item><definition_list_item><term>Change</term><definition><paragraph>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</paragraph></definition></definition_list_item><definition_list_item><term>Make collection</term><definition><paragraph>The creation of new collections also makes up a capability unit and can
optionally be implemented.</paragraph></definition></definition_list_item><definition_list_item><term>Lock</term><definition><paragraph>If the hander provides locking facilities on its own, the main server object
must not take care about that.</paragraph></definition></definition_list_item><definition_list_item><term>GZIP-Compress</term><definition><paragraph>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</paragraph></definition></definition_list_item></definition_list><paragraph>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</paragraph></section><section ids="ezcwebdavtransport" names="ezcwebdavtransport"><title refid="id7">ezcWebdavTransport</title><paragraph>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</paragraph><paragraph>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</paragraph><paragraph>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</paragraph><paragraph>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</paragraph><paragraph>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</paragraph><paragraph>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</paragraph><paragraph>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</paragraph><paragraph>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</paragraph></section><section ids="ezcwebdavpathfactory" names="ezcwebdavpathfactory"><title refid="id8">ezcWebdavPathFactory</title><paragraph>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</paragraph><paragraph>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</paragraph><paragraph>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</paragraph><paragraph>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</paragraph></section></section><section ids="example-code" names="example\\ code"><title refid="id9">Example code</title><paragraph>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</paragraph><literal_block xml:space="preserve">    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();</literal_block><comment xml:space="preserve">Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79</comment></section></document>
',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '14011',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/collection/subdir/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '14011',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/collection/put_test.xml',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '91f0d1c75dbbaf2736b997fbf1dfc2fb',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  46 => 
  array (
    'request' => 
    array (
      'body' => 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'î‰M7%““şŞ' . "\0" . '' . "\0" . '½6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT	' . "\0" . 'áGáGUx' . "\0" . 'èd' . "\0" . '½[isÛ6şÎ_Õtš¤«£IÛmëÚê$qÒf¶‡\'u÷šÌt ”P“—' . "\0" . '­¨¿~ß ARrãnvû!–(' . "\0" . 'ïı¼Øó¯ß–…¸UÕ¦º˜=^~<ªJM¦«íÅ¬uùâ‹Ù×ëäüO—?>¿şçÕ‘™´-UåÄÕÏÏ¾{õ\\Ìş¼Z½ºü;]Ø¥5m“ªÜ4[µ¬”[­.¯/Å¥ÿU|£*ÕètµzñÃjõï¿›‰ÙÎ¹úlµ:y' . "\0" . 'ü`WÊû™ËfÈÓbÁçI§2±9ôT>^~*XÒq«3{1S¿-RSÖ¦‚\'‹½Údòv‘)«·Õâñ¯d©hÙÑ­;{#xåüàµğÔÄ|^ÌşN?¯øGÿgéŞº™pÚ°@ı+:Nğò¹¸äÃè¬õ9-]ÿîÊó/DÁt•›õ¹lİÎ4ë¿šF‰L“•²‚¥×f£¥?¥»B;w¾ò«Îu«ÑÒë^«ÛÎWİ÷ó”¸şàş…ÇôåÜ:éZ»¾ldGøoç«´3µNEZHkQm©©ğmg¬ìş«Wk÷ HûÜ?è„Ú´E¡Ü/…¶n}ÿş¢*×çµlä¶‘õÈUª˜ˆÎÏ<ÓÙÅÌ¦¦V³õOø%óãhÿ*:ö)<é(x_1.·Zígk¶ŒŞ\'ÕO:ªNCtÎÖ×øç}Rø´£àM8[?ç\'©ü}Ö‘Q¿¥JÔ¥šÙ°ÿDŞ§p™RİÈôFUYDö?yŸt?ŸÒu¬lmQ¾ÏŞ\'í/¦´kév¹Liõ+xú’Ÿ¾ıÕÀî€³/{ÎŞÊ².àp±ú‚¿	üöG8! R©cjt<(0â&5Nxèéé]ï” ]ÂäÂí´íS|v³@Úè‚AÀJ;-Ÿp‹ì!<q;éDİ˜[¿Ã/ şË§ìÿs±ßét\'ö¦¹±b¯İNÈ¢¥üÕ4ÂÀáĞ¨$-Q>›GJD
F1)Á¹¤ä¶Ñ!¥ªj¹×7ºV™–KÈ§+ü¶ò‹×ü7V;²êLjŠåÀ' . "\0" . 'NB*ö)”İªSoøzÂ«XÛ¯H«iÛ' . "\0" . '®8ˆÊ€Â
ÈaÑA×²°”
öÚKÆè´<dvåaäcèğó7¢Çô±«<9ó§y¦RÙZï2JÜÊFKwÀ¯›v»=Yeà*È2x¯Û×±psò¸¤“Ü\\Â{œ"äÆ°` ÛB\\ÉLçdF\'*¥2»Ï€éL‘ÎãÀ‡S€‚Âp«F¦~íÉeCÅ#¤”ºâÔß…É)¦E1{˜:íë—ÏÅ“Ï1ñgyZ¹œ|gçÊbÕä)­]‡]¿%Åj	7Ô,Çãÿ,\\8—â)8YõRè´Aºi”k´ºÅà¯’x;ğ‰üš,pòÖ¦Š9(€E†2M	µ8ªQÿn•…b7xj‚ï€i;>Ä]ciK®e°§|t:¨A¹¶„
xğæş¶öÓ,ÓÈ @ÚaN À£øŠ#ˆ­+@;íˆãÈ³¼C&CŠVT¬ìØİĞ@7¥ïAò' . "\0" . 'J¦h©}x&èCCGbqj' . "\0" . 'R„#Bepjj-±Äşğß­q_QPóG¸	£ÄİSá®' . "\0" . '. Òª©I˜lŸ@¥nJX˜¢âØP_‚gŞ<{Şız×CÛKïŠ\\Y£û:sŒŸt¥çÑTÙG=Xd#­g<S$‚Ÿ:ûLà´~ƒ@¢¤Qu£,À=\\ç^:2ò]!¦1Ê –ª¬Ş€w µÕƒF%ü’*}\'ûĞ¡œÒ)°«ÌB0vşˆ1XK<ˆÀv‚wAãäTQ' . "\0" . 'T=`m¡ ÊHKánEÂ§lD"!ÏÈá?%d&„™E½edÇò¡Q@M¢9*„r9TÊÖ7Ê¤:›F;¶‘Z8Äl~İ,ÑV°dğĞ‹P%5rê„$âÍåwŸPÏ3‰Û0{UIÌãÃÒJoXkdŒh­(ãhg!µé&ó¾„kÚÀ"¡×ıR¼â”lá%é‹²¢H*ğkes’9®µ9©' . "\0" . 'Š”ò°	„’ØoaQ@\\¨²-º¬„u¼•º@\'’E‹‚¡z¨’>«ç' . "\0" . '' . "\0" . 'm£l(1¼œ@ĞÔŠ+€±Êˆ½<Ì©øHX±ê‡Êî!WW„1ÒùÊ´ªiLSİ@}#/Ìí×˜v»#b
øg¹…@gT™-	Š·±¿é‚ôˆÆØá×\'¼¾¤ÜŠk°~º=¨4ù
*òDÑ' . "\0" . 'O™E»#¥ÄSºĞ†»…„†{¶ŸF=¸‡ÛÁAãºYZëñÁŸé¶âùhU²îHÕI"·
ÜµH1	›¡#ÇBéƒhœ²P¹QT*·3‹£©­9,Úªğ£tày˜\\gcfÕT®ÂƒJw:+à8k‹øÑéIg~Zš.çV¹Ş¶MÀQätÒp–-€ÚFA%0öê¡‡B€p‹y<Î;ŸO[¾åññÊÕ…vX	$CÊİ4pÃ°òš8½en„ªˆÎ8ãtğÄµk„1}¹g§MÛ$\'Tô°Ğ7J&½ÁS)¶\\›çî‚“‘LÁò¤gH}ø‹n•wƒñ„ç[¯¤GÛz„› F°Î' . "\0" . '“uŸ1(3Ayƒ³LMÅ#=0£Gnéc˜2Uµ½¾‚Õü;TñÖ½ÎzöÈ\\JÓ Àç*¡’øtÈ“ªÈ…÷iauBí?µ@¢OXy[¥\\ÌcIš¶€°5Ë“qÁˆïÙ\'fÔïë`“\'ãzÛØZ™/ûBtW‹L• ËÉ-zODòSïf{‡Üm|œLrß+Á' . "\0" . '´òÒ—	ŒS\'µG#$ğ÷L‚"¤A­"˜v8Ã:‘ ,“z&”}µS`g‡µ²¥¾ù³;2FIõnŸ•(/0SDƒGÁ©IîÉÉ2âĞöíó‘”ƒÔIo©UŠC°Q£#³È¸°¿?~¶d¤Œ¹ÏAPxìôv‡bİhİááRídÜ;I‘İxœ#ÿrl4<I’èq#D²üòæ¨)Š@Êr¢êæ0ˆW<ê\\b¶_å](€¸ÇŠ\'‰”“¢¡' . "\0" . '»mF»”ß6Qö-IÍ*4g§fı‚?_Ì³#ß’ÙÃG÷`CŠ¿ï€Èú%`÷Ú§ DîØ8-íÍÓX¯óHÍÔ×ŒŒ^£Ùõå¤@[ã¾`"CÀ&ƒb˜øŠ·ú¨J&~ˆ‡ÜFGwì`ºíp¯wXÛÖîID*ôeŞóæ‚RvİB|¦@h¨ò$ ÷…–ÅŸ' . "\0" . 'Åus eªXnìª¨<H6Ú•ÒŞ Jø=èÔ¡òª×<w ra¶8 [èHj*b‡­×8ÈH$÷‹Ñï; Ör}Õ:€ü­3' . "\0" . 'jìI:Áíœ{­~,Ø KzŠ*Áy^ÒÖ˜8­¸ÕR|{}}µ¸úùÚ›k„‘1#«ã¼ß!Ñs2÷ï	œÚvÓ·Ó0	I4S8ı725ÄK¨Ëã…Î$YzGJ–ÿRÂï¡_ˆ
äß·â|¯öÑ^Ë—Üeb¿Û¹…ÓHblÄbpíÆ{í;¨ï–\'šŒ`	Ú°PœPtPSQR2ûj~¢RK(ÑaëH¥DrcZG~ı^ûæ_¯®Ï!Ãb)t·„ß\\À ¥a/İ
éL&P¥…‡“¡6¿éú	åèŒ®c|İuIÆGƒF€4ĞQvDÇ¬ô½Î‘RYs†¯ßø‡£‚]pdP˜ÔúÉög??—¼ê½ÒÏ¹ı^šİ¯ë/À\'µXt7>®Æ>?~]>­ÇÂˆbbâş¢k¦a+E#÷ !ç%ÃQ(×m¸´ãäu4võ3ª0Rğ…YUëBmö?òùKñcul
Ü¶¶e|huCëxxŞX¤á6§s§XE=…ÅŠ<§·s°]‹l\\áfp#ä` ÍÍ”ÄŠPUÊ‘6\\À8ùUv¾içÙ¾IÚÒ@»ëº¨rÁs™ÏŸkBÚ—·Õª-ÚöÔ÷0°8èîWte@ÃÓcÉ$(‰Çˆ~.IJ İ Ï!¥MõæŒ~$á/”ÂzÕxBºë®8P£Ä
F±ƒxô¦7g@ª»~éb€çÏ^@â9‹áòÃß-û.O¤æ»rıbi°ä-
Bâª6º£`CúÙ«\'¬A-*·WªÏ$ÇU÷E Vó#%t @çyŠì´I®¬Q4‰æOƒÆ®;ı(rLá$»ı(:;…Nœõ\'}£ÜQ
ôœ‰œ' . "\0" . 'à÷Éğ:u2–üæÅu4Œ€ *ĞŞ¢®û~ıjnÁÓ^ì1#/w@>‡y¯%_Å¥ğL/Û /¥ÂfDÛ’¼¸õƒú=:‘*,A>€x‰¬Ü29åÜlğÍZ½xL{~n—–÷Òú£²şÂx.øv€İi/0w†óºa°Ÿ†ss	%şï¿{1¬’47•Ù{]E—K|3ÍúÁU;	ö”Ét¨Äã‚îŠ]•4‘	¸—h Úç!eñNŠÆPıUé<cp>]øX7T…«p¾U	!‰÷”ûÕño“jcğ6Ü¸ŞøâÔrG®IâËçRÑàÌà…`Ês_¾qAı{KB‘7¦$1ƒGnâkÑ­¾°£íûıÑß7Ñd' . "\0" . 'ÚX¸0L 2æF¦hûÁvcŒ]"à«Q¸Ó^KØÏ=\'R†›tbw³»ã´àcûßPjÚÂJY×Èk¦q£iüEkü…—w\\³ø ¶ác¢@”)†EI¯ql˜Å*êÓNÉìÑóL±ÂCWÎ¬˜“e½«»GÔ€¿&õãR1øáÄÑÿ4-È}' . "\0" . 'È`O	“ş²¦èñë`¨§şæ×kÌ†j§S*ÏáR÷Îâ€µWŠ–ã—€ŞEn]Ê­²cY‘d¹³^VPÊ/¼ö¿Ö5¼03õ8|I„ß¬1eC~èĞ¢Ë=“áúq¸Ex±)`™âl„Áë¶:uáÁ@ªåv£¼ŠAè‰Zû¢³›j£i£:€b!ˆ¥{®q”ÍõWİ6{ccô v
Şâ·f;Xã‡o¿K;Æ³/Ç¯×½îÍ!.ÌÒVº®¡{°;¾³WâéÕ+zËa„' . "\0" . 'x5;z•U´ußÏ¤ƒÆ/Ùà`A¼-‹3[Kü\'¨ì‚í³5:Ë‡…ûêkğ¦$Áoøƒ/hÊ2º”~øè+^µZ	MMu*·²ñı;`úœ…;YrJş“Z|¸u_…m#²ş6à%œüP< ·~ 	`àÇ~š|,»
wz¹ãüóüÌ©º»C§p¤÷ÂPùêDbÚÀÜ)œq?¬¿“	ï¥MDÌo¾ÒÊğœşzZ\'8ãC,Jâƒm~¯ÓÆX“»åG¬Ã7öÏÿ¸z¤ÌÇçÓ\\»›kÃÇL‰wË:&ºõhå£©åÿÇêX~ôlš›·Ëşß:0¿$Ê©ÔÕöÅ0rx[Eòú@÷hHgpÎş7|ŠP{–”' . "\0" . 'Bg¢œ†' . "\0" . '-' . "\0" . 'ÊŠ¶„œòù—É‹*;Knu	İÀÏ¡ºh°DÜ_|şåùÊÓ`dxıPK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'Ú‰M7mh
¶’' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.htmlUT	' . "\0" . 'ìàG¼àGUx' . "\0" . 'èd' . "\0" . '¼\\é“Û6–ÿÎ¿Ñx;££»ívlµİÇv×æpÙ¹j«¶ ’0&	†' . "\0" . '[VRùß÷' . "\0" . '	RT»É®?Ø	<<¼ã÷@~òåû"×ª¶Ú”O\'§ó“‰Pej2]nN·=šˆ//“\'Ÿ¼øñùÕ?_¿[^ÿôÕw¯‹Él±øûıç‹Å‹«âß^}ÿ' . "\0" . '
âª–¥Õ(Ê|±xùÃDL¶ÎUËÅb·ÛÍw÷ç¦Ş,®Ş,Ş#­Sœì?Î\\4s¹l+Ó‚ÀeiŸ9}üø1Ïà e.‘qUNDû	i(™Á?…rR ™ú¹Ñ×O\'ÏMéTéfWûJMDÊßNœzïHóB¤[Y[åzQ,•Rêéd£JUKgêhò“6NçVœÌ,…ç8óçÖ4uªÖÀºš—Ê-˜¤Ó.W—ê_@¥¨L	t–âïj•Éë©x¡¬Ş”S”ì“ìñ ·í1ğ_¦VâSg…,aŞ•YiiÅÛt›kç¶IoıÎø~‡GY·Ï•p /’ÔZf²ø<Y>£U—â…¼Ö™øÆ˜l£êd‰•)p¿á\'m,ØÖp×ÉWYŠ;üÏÙÉÉùìôlvúHœœ.Ï.Oˆ¿œœœˆ»oÜù#BJÃî‰;ÉòºÖh¯@ ûøàìì¾|nª}­7[àáj«­ MØ­RNlA+¥JQå2U™Ğ¥p[%ªf•ëTd¦ºœ\'Éµ–MîD*m*Ñ˜†`"°	šEÖnW5N˜µZ‡ùo•:Tûš´ßíbkvÎyÍ:æìœì©Ã{áL’6Ö™Bÿh÷Á<Ì“Ï¨ÂÍ`¨¨Ua®•XÎAÚb]›B8¹ÒB–°ÏBnà#Lšóxa§<"z"\\6öp+~M„§½\'â·$ù¨™Àç' . "\0" . '0µÎ@Ô2#â6\'<!ˆhLÄNÃ¤É\'Àqej\'K7™øs\'­¶$¬ª$¸²¤¢%R•ƒ¬q£"ŒCOæçªÀED÷1_ëÚº.t [©T¯Á.
YoÀRXUcòz<læLµY(—ÖMÅgÏl³"7¦uı´•q ì±™[e`²86Ó,w¿%@¾”sgÒÙJ¦ïjµ¦!è¦³L¥DCnAC/àMjrô×˜ş;œ»ÊMúîçÆ85W•ŞÔ²ÚFS‚ÈPl88Ë;=eÙ(ã$ãßÈ,‚' . "\0" . 'R' . "\0" . '\'â.šŸ·N²bäï“{h³ğ¥•É³Ùš|1Sk]ò‹\\ƒNœªÛ_—µ„™í{8€EÑ2}=—+$u£ùm0¦áU:uº8$}D*sÀà%Àdİ’Ê
Ã<O}wˆ¡í×¹ı’A4R533õ”Hluéøa«uşZ‚bø“ÓØÉºDËnî"rÏBeº)— hÑ›ÖN#´Œƒº/,
^{™ôx=:Ù?:v4òîĞÓµ,tÆo!E˜ATÑëv;AîGÙñª8ÊkçètRØÑÉA/G¶ä¯VÑ^>f‡ãP°HƒŞHæt*s@1ğ.tˆ¢”[40“¢I\'¼h?Í½ìß€IGğk¹ÚÈLÆÁ[“e4õ4ƒ—g`ã)ÁÛ8`ûl+eò¥ĞNbÔÿí€æmq!&Všº' . "\0" . 'i{bk½iêŞ>rµv³ú‡>K9ë¶6à6$0e¶É‚r%ºÛvCb' . "\0" . '–«æ åºT3ö~¼àG¹öÙ	*Œp"¢7B¾ñF(õ²Ncû°lW²>ÔéÇ¡…°¶©ÉŒ¼Ãıi¿ÎÜrÄ“?³êr#aN(.:	óƒwÕ¼nV5˜Ê¯7øé@/á@io*f$E”ˆÅV‹c0l{:ÄÑ½ôìvø? P|xyŠä2î/·§s«R‚Ä÷LÅölìáıÃ‡ÉöÁØÈó±‡ Éƒ–«nÄx€Gc:GFÕ]‚òkgh_œÿßêb3§)d×±/Ó÷Ş¶½_GŒÑä`‹E…›lÂÇ1ìõ
†á€ï+¯L¦JA^¨=LÁ Üì vÍ«­<H¯fü7Uul0½ê¦éPƒÈòe~QÌ”ÛÁúZ¯šúctÎÜƒ’ó“?óÜTVí¼ñ8' . "\0" . 'cÀÎµ³ÇÆß
ü•ÊÙ¶Ú©^;´<d#G"
ÑÎa>hy„]`ÿxFZÄF®›àê<ôH÷\\âã¨‡VV+H¥²‹ÈÑiÉNFr¨1X>=ñÖ' . "\0" . 'ä %°hgSÀ“¡t‡!îCáûH' . "\0" . 'Rôk(ç)$?JJÕ?JØøÌ*×?7cd ĞËuûø}ê rívïTv#•0ŞtntÄÒiXå Ş|Ø€©r®t$ÌÑQ<‡t¸Õ(ŒÎ' . "\0" . 'æÂ³ZÊÛçÛ‡Bqø~«óÈ±p÷!×n÷ÃAÔkÛš\\gâ´z/ UŞ&2ğ¢¥†£Ëµ9ˆ>ÚãùíXş’%&€Ù!ÕU7ğJåı™—Ğ´ém§ƒ-õñîø¼Â¯Ğí!<÷îÑ½5I@.ØûS[HŸUÍ°;y¸tøH¯oY´S¬½8b¯‡[áA8×r…ËàûıŞwÈSïÏßÆß£' . "\0" . 'ÓÃ¥á1r¨jØĞ0ÒÏ°eÛu‰,èé%|ğ}ğ•Éöğ$n‚Ğäé—Ew™=¨_fm#d‹}hÀlCÏNg\'ÔP?3É3\'·é]oO±ÓÍºvUTæD¬kêE_MDİä
^"û¸ì|0”Ï-ê‘—¾•íë¸UqM–' . "\0" . '¼š
)ºúò	XñÑKß×~²p[™]ŞØM‡aÙ%üU€jÛ¦îèbëúÎmçSŸ<šKMúÛN~×Øhú‹Z®{¬/œ·ˆ©§o^VPìFùU­î£hNƒÉåI&Mü)CûıÒ¹Ø\'	ËW@®iUÈ¹-.‘k¤ä×j­' . "\0" . 'ÛSĞù>?üÉ¦lp%†Eğãå[|ÅÄÈ)y³6€N×ZíÍ³æˆŸ‰0èöÔDihŞïhŞŸ\\^á«ÛS¢ª¥õ £õ' . "\0" . 'dÊ/‰Z“˜˜ú%e¯†Ğ{
DÏ;¢çàÑ¿¤ìÆoiĞíYm©#|©2äväFä¿âQ¿ƒ>b\'2¬ğE·ÂÑ
WaÜïX£’n»–©3õ>¬ò¨[åQ´Êkù5ŒÖY>n·æ{‰æ' . "\0" . '–µ¶ı¸[ëñäò%8âpğÙ¾çúü‰ñ:Z::4h\'7Â5½kñªü%ö)ñêÏcè%}Q#2DMIµ¦M¡VSt:C}(<3ïGk!»h‘¸­tšk¨1,¼q¾xö7Á¶9Å¨nÅÎÔïüéT]ŞüÛÔÂ' . "\0" . 'ñZhàÒ”ÉÙ„8RâQûÓ9UÎwú® è“t˜Œß¼üä’ÿÅ]#s 3(V°ªËW´Í´©1åÌ÷j*–%ŸÇÉÜØ%¬Úm\'Í5J§İ¶§õŸjíŒµv' . "\0" . 'cşpwğxÉ¼N¿R©l¬×¨‚ YkéöøuÕl6{>JÄN4ˆ²ĞØqouJ‘´;­Æ¼‚ŠG0˜wƒ´li-™é5iÊ‰R©ÌÎÅW
O²i<SPÕ‚\'GH' . "\0" . '§z¬áµÀìürY«2´X<àeq¶f{ŒK±nrPì‡È“Û¹VnM&„§¸‹zŸ8¼ùú¹ÀOdE$9-Áâû¢cøÍ•=g.• \'ë$êöK»‡r¯ÖêšÎ‡“xŒ[P3v5h`ğ>\'ßÁØ*,:º­@ö¦.ğĞe_+¨O-‰Á.‘7ĞV«•»8ËãMYkÈñ¨éx¯ÕĞ3ÈÂùêG¾ŸBä9ûræ`àH—àúÚ±H­^ıI«~ñRÂèŞî•ê5l¯4ät{‘Ë=ìŸl³òÎ "ûZëSj' . "\0" . '
R„‚(Ì¼aÇtü)²^ñGï&	#Xù3á#T"ìº,u`Ô=µ$XP‚c%¡¼jÏ¼†<{Ş2:«@µHM İg@ò™Ã‰S(Œt
ZIë÷‘)Ú*zºPmáÜ%İ@µà×)ˆ6˜Ôªª•Å>X&VûÎ"üf‰Û›œA£?@~PZÉo‚ÁKC‘è@ÀŞ¤J_«,9Á{+Ï6	nÓš\'zK…É4†£JÖvà,=\\: 5ëµÊ)”b U>g´ç¹ğ¹_^ÁØO\'Ñ|;ÄÚdãêaˆãPb,­¬†‡¹X3Ô™\\BŠt¹I‘ˆ6Œv¬)' . "\0" . 'Œ bVÿaÌQ90¤÷Ğo¡L*ä:#@íõãgy|%qœ)caõiNãÙéV¥ïXL$pta­ßµ³9tykÁ1M`QÉ{.^qÄÂ÷¬w)I\'%Øµ²Ş÷—Ó”d„&' . "\0" . 'FAaÎ„…’Ø2aP' . "\0" . 'U¨¢ÉÛ˜€I…¼–:ç’9^–OÁK@S]Ğ\\ƒÇ7µ²!‚û}Â²%^f"äp' . "\0" . 'ÆJ#vr?íENà#a	Ä¢ï»ÃX]Ò)•Îçe¥ ƒò`‰ªgã°k›*¬6ÍfKÔ½wók¹‘Ø>»Š8ózI‚¤ml‘Á&Z¿±´üø„ÇØpæ#×c®H×!ƒLü¢(@œÌ¢¢q¥Ä¯ô‡Bé†Ò¶ôó¥´ÿÚ«úP¬töÁ•ÎCßgPòŠÃÇã¥!,t=xßá¬IÂğVXúNnØ)ßÑYBg´†ºÁ±Q@C/1TFT>ÊmMnDDîÖTì7M‰×5("xOïÇ×Ú³jJWC*BI3Ñ
PÎB!~tÚYû³Â´a·¤»' . "\0" . '­KG¾Ô²ÏNY4' . "\0" . 's+µ„d`hö}¹@¸ûGä¼uúPå+ïÁœ`h‡É@Òç(Üe<' . "\0" . 'ÄgƒäëÀ+,s“ xEÌpĞFààrİ|(Fù„Ÿ­6MÑİ\\¿SOe*9ŸkÖë{=€l"è–á_ñ^­ï?Šaâ[/p\\€¦u w€#A=XÖ]Ğ h8ô†®*Q†Ã`·kG†‘‚ÒI™LÊLŸµjG’ê€ì^H{¤¥©Röa†ò¤$¦¡RåkáÍá0{
r~Û' . "\0" . 'Í.H­›2åŒóæÔ49x¢±˜ƒìiYÎ2|Q,8£@7˜ìšu2Lê±l€©¹‘Ùx2¶œeª' . "\0" . 'æ;§Ë;ãÂõ–5kß—ğUdrØ+ú¶ŸĞÑıD].ÀXc{vˆ6›IØh(H¼r ã^â0)A^B1µV6ÖN˜ãZª¬˜!»%q”§v¡‡ ›”¼Œ¨&k°8ˆ‡¶+IGâ^4à­XğãA"³H_xå»oú¥í~ê1pò‡­Şl1Ï«jm ªÛß*€~8¬=„µ¶!9ˆkáù‘¦¤lhb±-„ò´¨˜‰pÇrti›Alúşzv°I¼{Ğò¶E+€í¹6Š»cÅf¢²›í4£YÊOëã"Û:¤šj‡åx<4º{¯ëaBX¿ U_R<S`™íCîQ²¹mç7ñN•kÅ€âÙleÃæ%‚#
ç…}{ìI	MÑ÷¼(Cr \\$b' . "\0" . '‘nÙÁ8Ô¢Gg¶©Ğ‡’h©PÂxuNÅ²ªH·xít*@P#M6÷S ­÷|øî—i¬Çc­`]H•ÉJ»BÚwèz~šF(¼¬†Ñ?³Ülè)BV”°õëÖv²øN0Ñz2wùºqàÇ¿dD0ÑÙ·¼ã°”è:P]ëÒSúí€†¢º©0FXq­¥øöêêõìõOW^ÄÀ–ñÚÏIÀñòøCŠfÕ¥Ÿ‡F€>SØå%™Š[Ÿtç6èL²R‘X–gàå{È*£¬ª/nÖø²Oí¢q–›É\\§`Ë®)5—óX»ÏáĞ9NÄÄwt+Ge/&!…y˜vë%a“Ù•Ó#!9!¼ÃÅÑFÑuäÊ4´±ğÍ¿^½=˜ÄxÖñòmğ¹‹nz>ö”Ìd
¬‘B#¢Í¯~ÑÕjFMg(Ãš‹Œ‘çUÜİÄtŠ¸®$Û4¬]NúŒq$ÿĞœ‹Eæé“"„…~ÍL>Ê…c¡‘üÒ÷ÏONÅÆ%¯:]ù¡ŸKåô¿ÄÂèğl»7GĞBD•İÎºş|ß‹C\'
x¹#Ï' . "\0" . '™ô{J9qhËÃ›¨å[¡ó„BK q¡’ˆ&û—L.~,ÇŠ}à¶±;Q£sl÷ÅM¼†N—†¶,v=ZÃÁ·´á‡Cœšı]®øldù^[È^+V_YÅ’Èå@|àÈ õe8Ä{!ÈbÜ	ôyé†ZmfKqvºÖøÛ ?Ö€fè—µª,5)V&7Õe´;ì	v=µSÉC¸jkí$A*ÜñÚ5	™|(ØĞ°ñ•œï½‡ñşÀ$pMGm¿eFkƒèëÜcav8U _âù^tkÖÜªó;"&C²:Áş”Ë§æH‘J˜vWÓè¥ŠÛëvµ³š¨ËªòM–ÇĞÅ¦ÜéËØd\\VÇrLß»n·LÎÊ…¦lÅGÖô¹cæ½ô¸¥>êı^İñ×UÄ¡©ÓŠœ{ÙMıF¹Q’ôœ©FVõOZ0ß¼¼Š‘N	P"˜ë”4ãÌî§7¯¦¨ineñ?,¼Œ;à>ğxC$õ÷Hq¬¤ ƒvä¥P˜_j[a6¾k¹C»P¹%`nÇ5Oz*§“|ĞŸŒ‰Ë·,’ÀòNZO*ëÎÇ¦‚œzßR{‰/Ğk_¾è®%d€#»Ã®±ÿ®4;/œ¨—Î\'o,µ• @™VÛ\\GµGˆª Ê5 kTwSó§ÊbGà…êóîìg¦Ğ£Oínë*øpÔç¤œxÓøƒ2‚GƒŒ wÕeÄïn¸òÒö€ãÃµBQƒÁàqHÊ-/îúº Õî¤¨
ÿfØu°ÈU|(´Ñ×ønœîñÛwZ|ó,¬l“$áÀ@€r3ª¯MŞt=½Ú780AH3Vã¶"+‹·Ôu€¶‰¿†¹¶c>hÁÆv5Şw [d^…¬*d.Ó8ÑÔş\\)>Cö¦Şk©–%ÖpZ™¯ËÆ©C\'b, Ä"ª1ÚMz@\\
!HeáÌ‚—WÛª}DØ0½Ö?M;Û
°òCß’Ö~x}%Ñey™Øu´bã&c' . "\0" . 'ßNÿ^Ä˜¥¨¾a0º3ş9üp7HbÑ²ÛlûxìÇïõ­O®ù®Mp@½ûo	BÀ ¬„R]¯Ï"DØğHqÁ‡`9·0,Õp]¶R^ˆ°ËÁué]ÛÁCåEá™ì9l	²âµÆ¶çAUSƒÃ¨0ı§Ç_=>õ®Åy\\ŠŸ\\‹‹®¬ÁÌÍşÇ€RWäèvËJ<{ıŠÎhçFƒkhPz\'ñá‘×sİ^eîıœ6ˆ–ñiî.¾ÓIèÛOé)Uøƒ#²»÷.xÔb!ü¡åŠ\\0’Çv7œ@ô…ëE²@ş/5ûtã.Â´Á²¾Áù5P¾+>#şL ÀÀ]\'"–¶øÙf™‡]kÏxàßÿ·ªjûùh' . "\0" . 'nto…' . "\0" . '‘[Ä’o·Ğ' . "\0" . '¦hŒ¡ƒõ½çpoæ`«Ùaÿ.ÿşPsçñîáŞ´Ïî~¯ÓÚX³vóÏY†ÿmÿò×÷ôgÓ!}:™å8>ÖæŸU·C¦û‹·ÃZ&ÚñŸÑÈ{‡šÿ?Çüó¯A§kó~şùÿ·Ì/' . "\0" . '‡òP=j“ñÁ0èràÆ5^wÿd6ßltşo=âÿœ²L
€“¥¨‚ÁÿrüFS@|øâñÿË5/ÅŠ«,3Ø' . "\0" . '\'•y¶ SDJÊmÍ-tu1
@}ØâzĞÚ@;.' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'î‰M7%““şŞ' . "\0" . '' . "\0" . '½6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '¤' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT' . "\0" . 'áGUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'Ú‰M7mh
¶’' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '¤' . "\0" . '' . "\0" . 'put_test.htmlUT' . "\0" . 'ìàGUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'ï(' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '
',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '10645',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/collection/subdir/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '10645',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/collection/put_test.zip',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'a7396b05849c2e5818d9af2c90beb699',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  47 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>4830744d2e394ce3c4d5667d7125c862</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>91f0d1c75dbbaf2736b997fbf1dfc2fb</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>a7396b05849c2e5818d9af2c90beb699</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  48 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3f3e5419aff5da5a5f9ef38c571ec272</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>88f535dffe3f6075a0a7461f40325aea</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>a22ba5f3f6bfe26a62130a37fa15133d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>4830744d2e394ce3c4d5667d7125c862</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  49 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test_non_utf8.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test_non_utf8.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test_non_utf8.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test_non_utf8.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/put_test_non_utf8.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'This is an UTF-8 test file
==========================

This file contains a variaty of Unicode characters to test with the eZ Webdav
component.

Greek letters
-------------

Î‘ Î’ Î“ Î” Î• Î– Î— Î˜ Î™ Îš Î› Îœ Î Î ÎŸ Î  Î¡ Î£ Î¤ Î¥ Î¦ Î§ Î¨ Î© 

Î± Î² Î³ Î´ Îµ Î¶ Î· Î¸ Î¹ Îº Î» Î¼ Î½ Î¾ Î¿ Ï€ Ï Ïƒ Ï„ Ï… Ï• Ï‡ Ïˆ Ï‰

Mathematical characters
-----------------------

â„‚ â„• â„š â„ â„¤ âˆ€ âˆ âˆ‚ âˆƒ âˆ„ âˆ… âˆˆ âˆ‰ âˆ‹ âˆŒ âˆ âˆ âˆ âˆ âˆ‘ + âˆ’ âˆ“ âˆ• âˆ– âˆ— âˆ˜ âˆš âˆ› âˆœ âˆ âˆ âˆ£ âˆ¤ âˆ§ âˆ¨ âˆ© âˆª âˆ«
âˆ¬ âˆ­ = â‰” â‰• â‰™ â‰ â‰  â‰¡ â‰¢ < > â‰¤ â‰¥ â‰ª â‰« â‰® â‰¯ â‰° â‰± â‰º â‰» â‰¼ â‰½ âŠ€ âŠ âŠ‚ âŠƒ âŠ„ âŠ… âŠ† âŠ‡ âŠˆ âŠ‰ âŠ• âŠ– âŠ— âŠ™ âŠš
âŠ› âŠœ âŠ âŠ¢ âŠ£ âŠ¤ âŠ¥ âŠ§ âŠ¬ âŠ¶ âŠ· âŠ» âŠ¼ âŠ½ â€° â€± 

',
      'headers' => 
      array (
        'ETag' => '88f535dffe3f6075a0a7461f40325aea',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  50 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>4830744d2e394ce3c4d5667d7125c862</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>91f0d1c75dbbaf2736b997fbf1dfc2fb</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>a7396b05849c2e5818d9af2c90beb699</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  51 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test_renamed.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test_renamed.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test_renamed.xml',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test_renamed.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/put_test_renamed.xml',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="generator" content="Docutils 0.4: http://docutils.sourceforge.net/" /><title>eZ component: Webdav, Design, 1.0</title><meta name="author" content="Kore Nordmann, Tobias Schlitt" /><meta name="date" content="$Date$" /><style type="text/css">

/*
:Author: David Goodger
:Contact: goodger@users.sourceforge.net
:Date: $Date: 2005-12-18 01:56:14 +0100 (Sun, 18 Dec 2005) $
:Revision: $Revision: 4224 $
:Copyright: This stylesheet has been placed in the public domain.

Default cascading style sheet for the HTML output of Docutils.

See http://docutils.sf.net/docs/howto/html-stylesheets.html for how to
customize this style sheet.
*/

/* used to remove borders from tables and images */
.borderless, table.borderless td, table.borderless th {
  border: 0 }

table.borderless td, table.borderless th {
  /* Override padding for "table.docutils td" with "! important".
     The right padding separates the table cells. */
  padding: 0 0.5em 0 0 ! important }

.first {
  /* Override more specific margin styles with "! important". */
  margin-top: 0 ! important }

.last, .with-subtitle {
  margin-bottom: 0 ! important }

.hidden {
  display: none }

a.toc-backref {
  text-decoration: none ;
  color: black }

blockquote.epigraph {
  margin: 2em 5em ; }

dl.docutils dd {
  margin-bottom: 0.5em }

/* Uncomment (and remove this text!) to get bold-faced definition list terms
dl.docutils dt {
  font-weight: bold }
*/

div.abstract {
  margin: 2em 5em }

div.abstract p.topic-title {
  font-weight: bold ;
  text-align: center }

div.admonition, div.attention, div.caution, div.danger, div.error,
div.hint, div.important, div.note, div.tip, div.warning {
  margin: 2em ;
  border: medium outset ;
  padding: 1em }

div.admonition p.admonition-title, div.hint p.admonition-title,
div.important p.admonition-title, div.note p.admonition-title,
div.tip p.admonition-title {
  font-weight: bold ;
  font-family: sans-serif }

div.attention p.admonition-title, div.caution p.admonition-title,
div.danger p.admonition-title, div.error p.admonition-title,
div.warning p.admonition-title {
  color: red ;
  font-weight: bold ;
  font-family: sans-serif }

/* Uncomment (and remove this text!) to get reduced vertical space in
   compound paragraphs.
div.compound .compound-first, div.compound .compound-middle {
  margin-bottom: 0.5em }

div.compound .compound-last, div.compound .compound-middle {
  margin-top: 0.5em }
*/

div.dedication {
  margin: 2em 5em ;
  text-align: center ;
  font-style: italic }

div.dedication p.topic-title {
  font-weight: bold ;
  font-style: normal }

div.figure {
  margin-left: 2em ;
  margin-right: 2em }

div.footer, div.header {
  clear: both;
  font-size: smaller }

div.line-block {
  display: block ;
  margin-top: 1em ;
  margin-bottom: 1em }

div.line-block div.line-block {
  margin-top: 0 ;
  margin-bottom: 0 ;
  margin-left: 1.5em }

div.sidebar {
  margin-left: 1em ;
  border: medium outset ;
  padding: 1em ;
  background-color: #ffffee ;
  width: 40% ;
  float: right ;
  clear: right }

div.sidebar p.rubric {
  font-family: sans-serif ;
  font-size: medium }

div.system-messages {
  margin: 5em }

div.system-messages h1 {
  color: red }

div.system-message {
  border: medium outset ;
  padding: 1em }

div.system-message p.system-message-title {
  color: red ;
  font-weight: bold }

div.topic {
  margin: 2em }

h1.section-subtitle, h2.section-subtitle, h3.section-subtitle,
h4.section-subtitle, h5.section-subtitle, h6.section-subtitle {
  margin-top: 0.4em }

h1.title {
  text-align: center }

h2.subtitle {
  text-align: center }

hr.docutils {
  width: 75% }

img.align-left {
  clear: left }

img.align-right {
  clear: right }

ol.simple, ul.simple {
  margin-bottom: 1em }

ol.arabic {
  list-style: decimal }

ol.loweralpha {
  list-style: lower-alpha }

ol.upperalpha {
  list-style: upper-alpha }

ol.lowerroman {
  list-style: lower-roman }

ol.upperroman {
  list-style: upper-roman }

p.attribution {
  text-align: right ;
  margin-left: 50% }

p.caption {
  font-style: italic }

p.credits {
  font-style: italic ;
  font-size: smaller }

p.label {
  white-space: nowrap }

p.rubric {
  font-weight: bold ;
  font-size: larger ;
  color: maroon ;
  text-align: center }

p.sidebar-title {
  font-family: sans-serif ;
  font-weight: bold ;
  font-size: larger }

p.sidebar-subtitle {
  font-family: sans-serif ;
  font-weight: bold }

p.topic-title {
  font-weight: bold }

pre.address {
  margin-bottom: 0 ;
  margin-top: 0 ;
  font-family: serif ;
  font-size: 100% }

pre.literal-block, pre.doctest-block {
  margin-left: 2em ;
  margin-right: 2em ;
  background-color: #eeeeee }

span.classifier {
  font-family: sans-serif ;
  font-style: oblique }

span.classifier-delimiter {
  font-family: sans-serif ;
  font-weight: bold }

span.interpreted {
  font-family: sans-serif }

span.option {
  white-space: nowrap }

span.pre {
  white-space: pre }

span.problematic {
  color: red }

span.section-subtitle {
  /* font-size relative to parent (h1..h6 element) */
  font-size: 80% }

table.citation {
  border-left: solid 1px gray;
  margin-left: 1px }

table.docinfo {
  margin: 2em 4em }

table.docutils {
  margin-top: 0.5em ;
  margin-bottom: 0.5em }

table.footnote {
  border-left: solid 1px black;
  margin-left: 1px }

table.docutils td, table.docutils th,
table.docinfo td, table.docinfo th {
  padding-left: 0.5em ;
  padding-right: 0.5em ;
  vertical-align: top }

table.docutils th.field-name, table.docinfo th.docinfo-name {
  font-weight: bold ;
  text-align: left ;
  white-space: nowrap ;
  padding-left: 0 }

h1 tt.docutils, h2 tt.docutils, h3 tt.docutils,
h4 tt.docutils, h5 tt.docutils, h6 tt.docutils {
  font-size: 100% }

tt.docutils {
  background-color: #eeeeee }

ul.auto-toc {
  list-style-type: none }

</style></head><body><div class="document" id="ez-component-webdav-design-1-0"><h1 class="title">eZ component: Webdav, Design, 1.0</h1><table class="docinfo" frame="void" rules="none"><col class="docinfo-name" /><col class="docinfo-content" /><tbody valign="top"><tr><th class="docinfo-name">Author:</th><td>Kore Nordmann, Tobias Schlitt</td></tr><tr><th class="docinfo-name">Revision:</th><td>$Rev$</td></tr><tr><th class="docinfo-name">Date:</th><td>$Date$</td></tr><tr><th class="docinfo-name">Status:</th><td>Draft</td></tr></tbody></table><div class="contents topic"><p class="topic-title first"><a id="contents" name="contents">Contents</a></p><ul class="simple"><li><a class="reference" href="#scope" id="id1" name="id1">Scope</a></li><li><a class="reference" href="#design-overview" id="id2" name="id2">Design overview</a></li><li><a class="reference" href="#tiers" id="id3" name="id3">Tiers</a></li><li><a class="reference" href="#classes" id="id4" name="id4">Classes</a><ul><li><a class="reference" href="#ezcwebdavserver" id="id5" name="id5">ezcWebdavServer</a></li><li><a class="reference" href="#ezcwebdavbackend" id="id6" name="id6">ezcWebdavBackend</a></li><li><a class="reference" href="#ezcwebdavtransport" id="id7" name="id7">ezcWebdavTransport</a></li><li><a class="reference" href="#ezcwebdavpathfactory" id="id8" name="id8">ezcWebdavPathFactory</a></li></ul></li><li><a class="reference" href="#example-code" id="id9" name="id9">Example code</a></li></ul></div><div class="section"><h1><a class="toc-backref" href="#id1" id="scope" name="scope">Scope</a></h1><p>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> protocol.</p><p>It is currently not planned to also offer a WebDAV client component.</p></div><div class="section"><h1><a class="toc-backref" href="#id2" id="design-overview" name="design-overview">Design overview</a></h1><p>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</p><p>The main class of this component will provide a fully <a class="reference" href="http://tools.ietf.org/html/rfc2518">RFC 2518</a> compliant
implementation of a <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</p><p>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</p></div><div class="section"><h1><a class="toc-backref" href="#id3" id="tiers" name="tiers">Tiers</a></h1><p>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</p><p>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</p><p>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</p><p>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</p></div><div class="section"><h1><a class="toc-backref" href="#id4" id="classes" name="classes">Classes</a></h1><div class="section"><h2><a class="toc-backref" href="#id5" id="ezcwebdavserver" name="ezcwebdavserver">ezcWebdavServer</a></h2><p>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</p><p>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</p><p>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</p><p>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</p><p>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</p><p>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</p><p>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</p></div><div class="section"><h2><a class="toc-backref" href="#id6" id="ezcwebdavbackend" name="ezcwebdavbackend">ezcWebdavBackend</a></h2><p>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</p><ul class="simple"><li>head()</li><li>get()</li><li>propFind()</li><li>propFetch()</li></ul><p>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</p><p>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</p><p>The logical groups of capabilities are:</p><dl class="docutils"><dt>Put</dt><dd>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</dd><dt>Change</dt><dd>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</dd><dt>Make collection</dt><dd>The creation of new collections also makes up a capability unit and can
optionally be implemented.</dd><dt>Lock</dt><dd>If the hander provides locking facilities on its own, the main server object
must not take care about that.</dd><dt>GZIP-Compress</dt><dd>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</dd></dl><p>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</p></div><div class="section"><h2><a class="toc-backref" href="#id7" id="ezcwebdavtransport" name="ezcwebdavtransport">ezcWebdavTransport</a></h2><p>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</p><p>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</p><p>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</p><p>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</p><p>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</p><p>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</p><p>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</p><p>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</p></div><div class="section"><h2><a class="toc-backref" href="#id8" id="ezcwebdavpathfactory" name="ezcwebdavpathfactory">ezcWebdavPathFactory</a></h2><p>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</p><p>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</p><p>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</p><p>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</p><p>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</p><p>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</p></div></div><div class="section"><h1><a class="toc-backref" href="#id9" id="example-code" name="example-code">Example code</a></h1><p>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</p><pre class="literal-block">
    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();
</pre><!-- Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79 --></div></div></body></html>

',
      'headers' => 
      array (
        'ETag' => '3f3e5419aff5da5a5f9ef38c571ec272',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  52 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'This is an UTF-8 test file
==========================

This file contains a variaty of Unicode characters to test with the eZ Webdav
component.

Greek letters
-------------

Î‘ Î’ Î“ Î” Î• Î– Î— Î˜ Î™ Îš Î› Îœ Î Î ÎŸ Î  Î¡ Î£ Î¤ Î¥ Î¦ Î§ Î¨ Î© 

Î± Î² Î³ Î´ Îµ Î¶ Î· Î¸ Î¹ Îº Î» Î¼ Î½ Î¾ Î¿ Ï€ Ï Ïƒ Ï„ Ï… Ï• Ï‡ Ïˆ Ï‰

Mathematical characters
-----------------------

â„‚ â„• â„š â„ â„¤ âˆ€ âˆ âˆ‚ âˆƒ âˆ„ âˆ… âˆˆ âˆ‰ âˆ‹ âˆŒ âˆ âˆ âˆ âˆ âˆ‘ + âˆ’ âˆ“ âˆ• âˆ– âˆ— âˆ˜ âˆš âˆ› âˆœ âˆ âˆ âˆ£ âˆ¤ âˆ§ âˆ¨ âˆ© âˆª âˆ«
âˆ¬ âˆ­ = â‰” â‰• â‰™ â‰ â‰  â‰¡ â‰¢ < > â‰¤ â‰¥ â‰ª â‰« â‰® â‰¯ â‰° â‰± â‰º â‰» â‰¼ â‰½ âŠ€ âŠ âŠ‚ âŠƒ âŠ„ âŠ… âŠ† âŠ‡ âŠˆ âŠ‰ âŠ• âŠ– âŠ— âŠ™ âŠš
âŠ› âŠœ âŠ âŠ¢ âŠ£ âŠ¤ âŠ¥ âŠ§ âŠ¬ âŠ¶ âŠ· âŠ» âŠ¼ âŠ½ â€° â€± 

',
      'headers' => 
      array (
        'ETag' => 'a22ba5f3f6bfe26a62130a37fa15133d',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  53 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/collection/subdir/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/collection/put_test.xml',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?><!DOCTYPE document PUBLIC "+//IDN docutils.sourceforge.net//DTD Docutils Generic//EN//XML" "http://docutils.sourceforge.net/docs/ref/docutils.dtd"><!-- Generated by Docutils 0.4 --><document ids="ez-component-webdav-design-1-0" names="ez\\ component:\\ webdav,\\ design,\\ 1.0" source="Webdav/design/design.txt" title="eZ component: Webdav, Design, 1.0"><title>eZ component: Webdav, Design, 1.0</title><docinfo><author>Kore Nordmann, Tobias Schlitt</author><revision>$Rev$</revision><date>$Date$</date><status>Draft</status></docinfo><topic classes="contents" ids="contents" names="contents"><title>Contents</title><bullet_list><list_item><paragraph><reference ids="id1" refid="scope">Scope</reference></paragraph></list_item><list_item><paragraph><reference ids="id2" refid="design-overview">Design overview</reference></paragraph></list_item><list_item><paragraph><reference ids="id3" refid="tiers">Tiers</reference></paragraph></list_item><list_item><paragraph><reference ids="id4" refid="classes">Classes</reference></paragraph><bullet_list><list_item><paragraph><reference ids="id5" refid="ezcwebdavserver">ezcWebdavServer</reference></paragraph></list_item><list_item><paragraph><reference ids="id6" refid="ezcwebdavbackend">ezcWebdavBackend</reference></paragraph></list_item><list_item><paragraph><reference ids="id7" refid="ezcwebdavtransport">ezcWebdavTransport</reference></paragraph></list_item><list_item><paragraph><reference ids="id8" refid="ezcwebdavpathfactory">ezcWebdavPathFactory</reference></paragraph></list_item></bullet_list></list_item><list_item><paragraph><reference ids="id9" refid="example-code">Example code</reference></paragraph></list_item></bullet_list></topic><section ids="scope" names="scope"><title refid="id1">Scope</title><paragraph>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> protocol.</paragraph><target ids="webdav" names="webdav" refuri="http://en.wikipedia.org/wiki/WebDAV"/><paragraph>It is currently not planned to also offer a WebDAV client component.</paragraph></section><section ids="design-overview" names="design\\ overview"><title refid="id2">Design overview</title><paragraph>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</paragraph><paragraph>The main class of this component will provide a fully <reference name="RFC 2518" refuri="http://tools.ietf.org/html/rfc2518">RFC 2518</reference> compliant
implementation of a <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</paragraph><target ids="rfc-2518" names="rfc\\ 2518" refuri="http://tools.ietf.org/html/rfc2518"/><paragraph>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</paragraph></section><section ids="tiers" names="tiers"><title refid="id3">Tiers</title><paragraph>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</paragraph><paragraph>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</paragraph><paragraph>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</paragraph><paragraph>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</paragraph></section><section ids="classes" names="classes"><title refid="id4">Classes</title><section ids="ezcwebdavserver" names="ezcwebdavserver"><title refid="id5">ezcWebdavServer</title><paragraph>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</paragraph><paragraph>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</paragraph><paragraph>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</paragraph><paragraph>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</paragraph><paragraph>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</paragraph><paragraph>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</paragraph><paragraph>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</paragraph></section><section ids="ezcwebdavbackend" names="ezcwebdavbackend"><title refid="id6">ezcWebdavBackend</title><paragraph>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</paragraph><bullet_list bullet="-"><list_item><paragraph>head()</paragraph></list_item><list_item><paragraph>get()</paragraph></list_item><list_item><paragraph>propFind()</paragraph></list_item><list_item><paragraph>propFetch()</paragraph></list_item></bullet_list><paragraph>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</paragraph><paragraph>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</paragraph><paragraph>The logical groups of capabilities are:</paragraph><definition_list><definition_list_item><term>Put</term><definition><paragraph>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</paragraph></definition></definition_list_item><definition_list_item><term>Change</term><definition><paragraph>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</paragraph></definition></definition_list_item><definition_list_item><term>Make collection</term><definition><paragraph>The creation of new collections also makes up a capability unit and can
optionally be implemented.</paragraph></definition></definition_list_item><definition_list_item><term>Lock</term><definition><paragraph>If the hander provides locking facilities on its own, the main server object
must not take care about that.</paragraph></definition></definition_list_item><definition_list_item><term>GZIP-Compress</term><definition><paragraph>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</paragraph></definition></definition_list_item></definition_list><paragraph>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</paragraph></section><section ids="ezcwebdavtransport" names="ezcwebdavtransport"><title refid="id7">ezcWebdavTransport</title><paragraph>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</paragraph><paragraph>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</paragraph><paragraph>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</paragraph><paragraph>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</paragraph><paragraph>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</paragraph><paragraph>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</paragraph><paragraph>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</paragraph><paragraph>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</paragraph></section><section ids="ezcwebdavpathfactory" names="ezcwebdavpathfactory"><title refid="id8">ezcWebdavPathFactory</title><paragraph>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</paragraph><paragraph>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</paragraph><paragraph>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</paragraph><paragraph>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</paragraph></section></section><section ids="example-code" names="example\\ code"><title refid="id9">Example code</title><paragraph>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</paragraph><literal_block xml:space="preserve">    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();</literal_block><comment xml:space="preserve">Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79</comment></section></document>
',
      'headers' => 
      array (
        'ETag' => '91f0d1c75dbbaf2736b997fbf1dfc2fb',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  54 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/collection/subdir/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir/collection/put_test.zip',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'î‰M7%““şŞ' . "\0" . '' . "\0" . '½6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT	' . "\0" . 'áGáGUx' . "\0" . 'èd' . "\0" . '½[isÛ6şÎ_Õtš¤«£IÛmëÚê$qÒf¶‡\'u÷šÌt ”P“—' . "\0" . '­¨¿~ß ARrãnvû!–(' . "\0" . 'ïı¼Øó¯ß–…¸UÕ¦º˜=^~<ªJM¦«íÅ¬uùâ‹Ù×ëäüO—?>¿şçÕ‘™´-UåÄÕÏÏ¾{õ\\Ìş¼Z½ºü;]Ø¥5m“ªÜ4[µ¬”[­.¯/Å¥ÿU|£*ÕètµzñÃjõï¿›‰ÙÎ¹úlµ:y' . "\0" . 'ü`WÊû™ËfÈÓbÁçI§2±9ôT>^~*XÒq«3{1S¿-RSÖ¦‚\'‹½Údòv‘)«·Õâñ¯d©hÙÑ­;{#xåüàµğÔÄ|^ÌşN?¯øGÿgéŞº™pÚ°@ı+:Nğò¹¸äÃè¬õ9-]ÿîÊó/DÁt•›õ¹lİÎ4ë¿šF‰L“•²‚¥×f£¥?¥»B;w¾ò«Îu«ÑÒë^«ÛÎWİ÷ó”¸şàş…ÇôåÜ:éZ»¾ldGøoç«´3µNEZHkQm©©ğmg¬ìş«Wk÷ HûÜ?è„Ú´E¡Ü/…¶n}ÿş¢*×çµlä¶‘õÈUª˜ˆÎÏ<ÓÙÅÌ¦¦V³õOø%óãhÿ*:ö)<é(x_1.·Zígk¶ŒŞ\'ÕO:ªNCtÎÖ×øç}Rø´£àM8[?ç\'©ü}Ö‘Q¿¥JÔ¥šÙ°ÿDŞ§p™RİÈôFUYDö?yŸt?ŸÒu¬lmQ¾ÏŞ\'í/¦´kév¹Liõ+xú’Ÿ¾ıÕÀî€³/{ÎŞÊ².àp±ú‚¿	üöG8! R©cjt<(0â&5Nxèéé]ï” ]ÂäÂí´íS|v³@Úè‚AÀJ;-Ÿp‹ì!<q;éDİ˜[¿Ã/ şË§ìÿs±ßét\'ö¦¹±b¯İNÈ¢¥üÕ4ÂÀáĞ¨$-Q>›GJD
F1)Á¹¤ä¶Ñ!¥ªj¹×7ºV™–KÈ§+ü¶ò‹×ü7V;²êLjŠåÀ' . "\0" . 'NB*ö)”İªSoøzÂ«XÛ¯H«iÛ' . "\0" . '®8ˆÊ€Â
ÈaÑA×²°”
öÚKÆè´<dvåaäcèğó7¢Çô±«<9ó§y¦RÙZï2JÜÊFKwÀ¯›v»=Yeà*È2x¯Û×±psò¸¤“Ü\\Â{œ"äÆ°` ÛB\\ÉLçdF\'*¥2»Ï€éL‘ÎãÀ‡S€‚Âp«F¦~íÉeCÅ#¤”ºâÔß…É)¦E1{˜:íë—ÏÅ“Ï1ñgyZ¹œ|gçÊbÕä)­]‡]¿%Åj	7Ô,Çãÿ,\\8—â)8YõRè´Aºi”k´ºÅà¯’x;ğ‰üš,pòÖ¦Š9(€E†2M	µ8ªQÿn•…b7xj‚ï€i;>Ä]ciK®e°§|t:¨A¹¶„
xğæş¶öÓ,ÓÈ @ÚaN À£øŠ#ˆ­+@;íˆãÈ³¼C&CŠVT¬ìØİĞ@7¥ïAò' . "\0" . 'J¦h©}x&èCCGbqj' . "\0" . 'R„#Bepjj-±Äşğß­q_QPóG¸	£ÄİSá®' . "\0" . '. Òª©I˜lŸ@¥nJX˜¢âØP_‚gŞ<{Şız×CÛKïŠ\\Y£û:sŒŸt¥çÑTÙG=Xd#­g<S$‚Ÿ:ûLà´~ƒ@¢¤Qu£,À=\\ç^:2ò]!¦1Ê –ª¬Ş€w µÕƒF%ü’*}\'ûĞ¡œÒ)°«ÌB0vşˆ1XK<ˆÀv‚wAãäTQ' . "\0" . 'T=`m¡ ÊHKánEÂ§lD"!ÏÈá?%d&„™E½edÇò¡Q@M¢9*„r9TÊÖ7Ê¤:›F;¶‘Z8Äl~İ,ÑV°dğĞ‹P%5rê„$âÍåwŸPÏ3‰Û0{UIÌãÃÒJoXkdŒh­(ãhg!µé&ó¾„kÚÀ"¡×ıR¼â”lá%é‹²¢H*ğkes’9®µ9©' . "\0" . 'Š”ò°	„’ØoaQ@\\¨²-º¬„u¼•º@\'’E‹‚¡z¨’>«ç' . "\0" . '' . "\0" . 'm£l(1¼œ@ĞÔŠ+€±Êˆ½<Ì©øHX±ê‡Êî!WW„1ÒùÊ´ªiLSİ@}#/Ìí×˜v»#b
øg¹…@gT™-	Š·±¿é‚ôˆÆØá×\'¼¾¤ÜŠk°~º=¨4ù
*òDÑ' . "\0" . 'O™E»#¥ÄSºĞ†»…„†{¶ŸF=¸‡ÛÁAãºYZëñÁŸé¶âùhU²îHÕI"·
ÜµH1	›¡#ÇBéƒhœ²P¹QT*·3‹£©­9,Úªğ£tày˜\\gcfÕT®ÂƒJw:+à8k‹øÑéIg~Zš.çV¹Ş¶MÀQätÒp–-€ÚFA%0öê¡‡B€p‹y<Î;ŸO[¾åññÊÕ…vX	$CÊİ4pÃ°òš8½en„ªˆÎ8ãtğÄµk„1}¹g§MÛ$\'Tô°Ğ7J&½ÁS)¶\\›çî‚“‘LÁò¤gH}ø‹n•wƒñ„ç[¯¤GÛz„› F°Î' . "\0" . '“uŸ1(3Ayƒ³LMÅ#=0£Gnéc˜2Uµ½¾‚Õü;TñÖ½ÎzöÈ\\JÓ Àç*¡’øtÈ“ªÈ…÷iauBí?µ@¢OXy[¥\\ÌcIš¶€°5Ë“qÁˆïÙ\'fÔïë`“\'ãzÛØZ™/ûBtW‹L• ËÉ-zODòSïf{‡Üm|œLrß+Á' . "\0" . '´òÒ—	ŒS\'µG#$ğ÷L‚"¤A­"˜v8Ã:‘ ,“z&”}µS`g‡µ²¥¾ù³;2FIõnŸ•(/0SDƒGÁ©IîÉÉ2âĞöíó‘”ƒÔIo©UŠC°Q£#³È¸°¿?~¶d¤Œ¹ÏAPxìôv‡bİhİááRídÜ;I‘İxœ#ÿrl4<I’èq#D²üòæ¨)Š@Êr¢êæ0ˆW<ê\\b¶_å](€¸ÇŠ\'‰”“¢¡' . "\0" . '»mF»”ß6Qö-IÍ*4g§fı‚?_Ì³#ß’ÙÃG÷`CŠ¿ï€Èú%`÷Ú§ DîØ8-íÍÓX¯óHÍÔ×ŒŒ^£Ùõå¤@[ã¾`"CÀ&ƒb˜øŠ·ú¨J&~ˆ‡ÜFGwì`ºíp¯wXÛÖîID*ôeŞóæ‚RvİB|¦@h¨ò$ ÷…–ÅŸ' . "\0" . 'Åus eªXnìª¨<H6Ú•ÒŞ Jø=èÔ¡òª×<w ra¶8 [èHj*b‡­×8ÈH$÷‹Ñï; Ör}Õ:€ü­3' . "\0" . 'jìI:Áíœ{­~,Ø KzŠ*Áy^ÒÖ˜8­¸ÕR|{}}µ¸úùÚ›k„‘1#«ã¼ß!Ñs2÷ï	œÚvÓ·Ó0	I4S8ı725ÄK¨Ëã…Î$YzGJ–ÿRÂï¡_ˆ
äß·â|¯öÑ^Ë—Üeb¿Û¹…ÓHblÄbpíÆ{í;¨ï–\'šŒ`	Ú°PœPtPSQR2ûj~¢RK(ÑaëH¥DrcZG~ı^ûæ_¯®Ï!Ãb)t·„ß\\À ¥a/İ
éL&P¥…‡“¡6¿éú	åèŒ®c|İuIÆGƒF€4ĞQvDÇ¬ô½Î‘RYs†¯ßø‡£‚]pdP˜ÔúÉög??—¼ê½ÒÏ¹ı^šİ¯ë/À\'µXt7>®Æ>?~]>­ÇÂˆbbâş¢k¦a+E#÷ !ç%ÃQ(×m¸´ãäu4võ3ª0Rğ…YUëBmö?òùKñcul
Ü¶¶e|huCëxxŞX¤á6§s§XE=…ÅŠ<§·s°]‹l\\áfp#ä` ÍÍ”ÄŠPUÊ‘6\\À8ùUv¾içÙ¾IÚÒ@»ëº¨rÁs™ÏŸkBÚ—·Õª-ÚöÔ÷0°8èîWte@ÃÓcÉ$(‰Çˆ~.IJ İ Ï!¥MõæŒ~$á/”ÂzÕxBºë®8P£Ä
F±ƒxô¦7g@ª»~éb€çÏ^@â9‹áòÃß-û.O¤æ»rıbi°ä-
Bâª6º£`CúÙ«\'¬A-*·WªÏ$ÇU÷E Vó#%t @çyŠì´I®¬Q4‰æOƒÆ®;ı(rLá$»ı(:;…Nœõ\'}£ÜQ
ôœ‰œ' . "\0" . 'à÷Éğ:u2–üæÅu4Œ€ *ĞŞ¢®û~ıjnÁÓ^ì1#/w@>‡y¯%_Å¥ğL/Û /¥ÂfDÛ’¼¸õƒú=:‘*,A>€x‰¬Ü29åÜlğÍZ½xL{~n—–÷Òú£²şÂx.øv€İi/0w†óºa°Ÿ†ss	%şï¿{1¬’47•Ù{]E—K|3ÍúÁU;	ö”Ét¨Äã‚îŠ]•4‘	¸—h Úç!eñNŠÆPıUé<cp>]øX7T…«p¾U	!‰÷”ûÕño“jcğ6Ü¸ŞøâÔrG®IâËçRÑàÌà…`Ês_¾qAı{KB‘7¦$1ƒGnâkÑ­¾°£íûıÑß7Ñd' . "\0" . 'ÚX¸0L 2æF¦hûÁvcŒ]"à«Q¸Ó^KØÏ=\'R†›tbw³»ã´àcûßPjÚÂJY×Èk¦q£iüEkü…—w\\³ø ¶ác¢@”)†EI¯ql˜Å*êÓNÉìÑóL±ÂCWÎ¬˜“e½«»GÔ€¿&õãR1øáÄÑÿ4-È}' . "\0" . 'È`O	“ş²¦èñë`¨§şæ×kÌ†j§S*ÏáR÷Îâ€µWŠ–ã—€ŞEn]Ê­²cY‘d¹³^VPÊ/¼ö¿Ö5¼03õ8|I„ß¬1eC~èĞ¢Ë=“áúq¸Ex±)`™âl„Áë¶:uáÁ@ªåv£¼ŠAè‰Zû¢³›j£i£:€b!ˆ¥{®q”ÍõWİ6{ccô v
Şâ·f;Xã‡o¿K;Æ³/Ç¯×½îÍ!.ÌÒVº®¡{°;¾³WâéÕ+zËa„' . "\0" . 'x5;z•U´ußÏ¤ƒÆ/Ùà`A¼-‹3[Kü\'¨ì‚í³5:Ë‡…ûêkğ¦$Áoøƒ/hÊ2º”~øè+^µZ	MMu*·²ñı;`úœ…;YrJş“Z|¸u_…m#²ş6à%œüP< ·~ 	`àÇ~š|,»
wz¹ãüóüÌ©º»C§p¤÷ÂPùêDbÚÀÜ)œq?¬¿“	ï¥MDÌo¾ÒÊğœşzZ\'8ãC,Jâƒm~¯ÓÆX“»åG¬Ã7öÏÿ¸z¤ÌÇçÓ\\»›kÃÇL‰wË:&ºõhå£©åÿÇêX~ôlš›·Ëşß:0¿$Ê©ÔÕöÅ0rx[Eòú@÷hHgpÎş7|ŠP{–”' . "\0" . 'Bg¢œ†' . "\0" . '-' . "\0" . 'ÊŠ¶„œòù—É‹*;Knu	İÀÏ¡ºh°DÜ_|şåùÊÓ`dxıPK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'Ú‰M7mh
¶’' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.htmlUT	' . "\0" . 'ìàG¼àGUx' . "\0" . 'èd' . "\0" . '¼\\é“Û6–ÿÎ¿Ñx;££»ívlµİÇv×æpÙ¹j«¶ ’0&	†' . "\0" . '[VRùß÷' . "\0" . '	RT»É®?Ø	<<¼ã÷@~òåû"×ª¶Ú”O\'§ó“‰Pej2]nN·=šˆ//“\'Ÿ¼øñùÕ?_¿[^ÿôÕw¯‹Él±øûıç‹Å‹«âß^}ÿ' . "\0" . '
âª–¥Õ(Ê|±xùÃDL¶ÎUËÅb·ÛÍw÷ç¦Ş,®Ş,Ş#­Sœì?Î\\4s¹l+Ó‚ÀeiŸ9}üø1Ïà e.‘qUNDû	i(™Á?…rR ™ú¹Ñ×O\'ÏMéTéfWûJMDÊßNœzïHóB¤[Y[åzQ,•Rêéd£JUKgêhò“6NçVœÌ,…ç8óçÖ4uªÖÀºš—Ê-˜¤Ó.W—ê_@¥¨L	t–âïj•Éë©x¡¬Ş”S”ì“ìñ ·í1ğ_¦VâSg…,aŞ•YiiÅÛt›kç¶IoıÎø~‡GY·Ï•p /’ÔZf²ø<Y>£U—â…¼Ö™øÆ˜l£êd‰•)p¿á\'m,ØÖp×ÉWYŠ;üÏÙÉÉùìôlvúHœœ.Ï.Oˆ¿œœœˆ»oÜù#BJÃî‰;ÉòºÖh¯@ ûøàìì¾|nª}­7[àáj«­ MØ­RNlA+¥JQå2U™Ğ¥p[%ªf•ëTd¦ºœ\'Éµ–MîD*m*Ñ˜†`"°	šEÖnW5N˜µZ‡ùo•:Tûš´ßíbkvÎyÍ:æìœì©Ã{áL’6Ö™Bÿh÷Á<Ì“Ï¨ÂÍ`¨¨Ua®•XÎAÚb]›B8¹ÒB–°ÏBnà#Lšóxa§<"z"\\6öp+~M„§½\'â·$ù¨™Àç' . "\0" . '0µÎ@Ô2#â6\'<!ˆhLÄNÃ¤É\'Àqej\'K7™øs\'­¶$¬ª$¸²¤¢%R•ƒ¬q£"ŒCOæçªÀED÷1_ëÚº.t [©T¯Á.
YoÀRXUcòz<læLµY(—ÖMÅgÏl³"7¦uı´•q ì±™[e`²86Ó,w¿%@¾”sgÒÙJ¦ïjµ¦!è¦³L¥DCnAC/àMjrô×˜ş;œ»ÊMúîçÆ85W•ŞÔ²ÚFS‚ÈPl88Ë;=eÙ(ã$ãßÈ,‚' . "\0" . 'R' . "\0" . '\'â.šŸ·N²bäï“{h³ğ¥•É³Ùš|1Sk]ò‹\\ƒNœªÛ_—µ„™í{8€EÑ2}=—+$u£ùm0¦áU:uº8$}D*sÀà%Àdİ’Ê
Ã<O}wˆ¡í×¹ı’A4R533õ”Hluéøa«uşZ‚bø“ÓØÉºDËnî"rÏBeº)— hÑ›ÖN#´Œƒº/,
^{™ôx=:Ù?:v4òîĞÓµ,tÆo!E˜ATÑëv;AîGÙñª8ÊkçètRØÑÉA/G¶ä¯VÑ^>f‡ãP°HƒŞHæt*s@1ğ.tˆ¢”[40“¢I\'¼h?Í½ìß€IGğk¹ÚÈLÆÁ[“e4õ4ƒ—g`ã)ÁÛ8`ûl+eò¥ĞNbÔÿí€æmq!&Všº' . "\0" . 'i{bk½iêŞ>rµv³ú‡>K9ë¶6à6$0e¶É‚r%ºÛvCb' . "\0" . '–«æ åºT3ö~¼àG¹öÙ	*Œp"¢7B¾ñF(õ²Ncû°lW²>ÔéÇ¡…°¶©ÉŒ¼Ãıi¿ÎÜrÄ“?³êr#aN(.:	óƒwÕ¼nV5˜Ê¯7øé@/á@io*f$E”ˆÅV‹c0l{:ÄÑ½ôìvø? P|xyŠä2î/·§s«R‚Ä÷LÅölìáıÃ‡ÉöÁØÈó±‡ Éƒ–«nÄx€Gc:GFÕ]‚òkgh_œÿßêb3§)d×±/Ó÷Ş¶½_GŒÑä`‹E…›lÂÇ1ìõ
†á€ï+¯L¦JA^¨=LÁ Üì vÍ«­<H¯fü7Uul0½ê¦éPƒÈòe~QÌ”ÛÁúZ¯šúctÎÜƒ’ó“?óÜTVí¼ñ8' . "\0" . 'cÀÎµ³ÇÆß
ü•ÊÙ¶Ú©^;´<d#G"
ÑÎa>hy„]`ÿxFZÄF®›àê<ôH÷\\âã¨‡VV+H¥²‹ÈÑiÉNFr¨1X>=ñÖ' . "\0" . 'ä %°hgSÀ“¡t‡!îCáûH' . "\0" . 'Rôk(ç)$?JJÕ?JØøÌ*×?7cd ĞËuûø}ê rívïTv#•0ŞtntÄÒiXå Ş|Ø€©r®t$ÌÑQ<‡t¸Õ(ŒÎ' . "\0" . 'æÂ³ZÊÛçÛ‡Bqø~«óÈ±p÷!×n÷ÃAÔkÛš\\gâ´z/ UŞ&2ğ¢¥†£Ëµ9ˆ>ÚãùíXş’%&€Ù!ÕU7ğJåı™—Ğ´ém§ƒ-õñîø¼Â¯Ğí!<÷îÑ½5I@.ØûS[HŸUÍ°;y¸tøH¯oY´S¬½8b¯‡[áA8×r…ËàûıŞwÈSïÏßÆß£' . "\0" . 'ÓÃ¥á1r¨jØĞ0ÒÏ°eÛu‰,èé%|ğ}ğ•Éöğ$n‚Ğäé—Ew™=¨_fm#d‹}hÀlCÏNg\'ÔP?3É3\'·é]oO±ÓÍºvUTæD¬kêE_MDİä
^"û¸ì|0”Ï-ê‘—¾•íë¸UqM–' . "\0" . '¼š
)ºúò	XñÑKß×~²p[™]ŞØM‡aÙ%üU€jÛ¦îèbëúÎmçSŸ<šKMúÛN~×Øhú‹Z®{¬/œ·ˆ©§o^VPìFùU­î£hNƒÉåI&Mü)CûıÒ¹Ø\'	ËW@®iUÈ¹-.‘k¤ä×j­' . "\0" . 'ÛSĞù>?üÉ¦lp%†Eğãå[|ÅÄÈ)y³6€N×ZíÍ³æˆŸ‰0èöÔDihŞïhŞŸ\\^á«ÛS¢ª¥õ £õ' . "\0" . 'dÊ/‰Z“˜˜ú%e¯†Ğ{
DÏ;¢çàÑ¿¤ìÆoiĞíYm©#|©2äväFä¿âQ¿ƒ>b\'2¬ğE·ÂÑ
WaÜïX£’n»–©3õ>¬ò¨[åQ´Êkù5ŒÖY>n·æ{‰æ' . "\0" . '–µ¶ı¸[ëñäò%8âpğÙ¾çúü‰ñ:Z::4h\'7Â5½kñªü%ö)ñêÏcè%}Q#2DMIµ¦M¡VSt:C}(<3ïGk!»h‘¸­tšk¨1,¼q¾xö7Á¶9Å¨nÅÎÔïüéT]ŞüÛÔÂ' . "\0" . 'ñZhàÒ”ÉÙ„8RâQûÓ9UÎwú® è“t˜Œß¼üä’ÿÅ]#s 3(V°ªËW´Í´©1åÌ÷j*–%ŸÇÉÜØ%¬Úm\'Í5J§İ¶§õŸjíŒµv' . "\0" . 'cşpwğxÉ¼N¿R©l¬×¨‚ YkéöøuÕl6{>JÄN4ˆ²ĞØqouJ‘´;­Æ¼‚ŠG0˜wƒ´li-™é5iÊ‰R©ÌÎÅW
O²i<SPÕ‚\'GH' . "\0" . '§z¬áµÀìürY«2´X<àeq¶f{ŒK±nrPì‡È“Û¹VnM&„§¸‹zŸ8¼ùú¹ÀOdE$9-Áâû¢cøÍ•=g.• \'ë$êöK»‡r¯ÖêšÎ‡“xŒ[P3v5h`ğ>\'ßÁØ*,:º­@ö¦.ğĞe_+¨O-‰Á.‘7ĞV«•»8ËãMYkÈñ¨éx¯ÕĞ3ÈÂùêG¾ŸBä9ûræ`àH—àúÚ±H­^ıI«~ñRÂèŞî•ê5l¯4ät{‘Ë=ìŸl³òÎ "ûZëSj' . "\0" . '
R„‚(Ì¼aÇtü)²^ñGï&	#Xù3á#T"ìº,u`Ô=µ$XP‚c%¡¼jÏ¼†<{Ş2:«@µHM İg@ò™Ã‰S(Œt
ZIë÷‘)Ú*zºPmáÜ%İ@µà×)ˆ6˜Ôªª•Å>X&VûÎ"üf‰Û›œA£?@~PZÉo‚ÁKC‘è@ÀŞ¤J_«,9Á{+Ï6	nÓš\'zK…É4†£JÖvà,=\\: 5ëµÊ)”b U>g´ç¹ğ¹_^ÁØO\'Ñ|;ÄÚdãêaˆãPb,­¬†‡¹X3Ô™\\BŠt¹I‘ˆ6Œv¬)' . "\0" . 'Œ bVÿaÌQ90¤÷Ğo¡L*ä:#@íõãgy|%qœ)caõiNãÙéV¥ïXL$pta­ßµ³9tykÁ1M`QÉ{.^qÄÂ÷¬w)I\'%Øµ²Ş÷—Ó”d„&' . "\0" . 'FAaÎ„…’Ø2aP' . "\0" . 'U¨¢ÉÛ˜€I…¼–:ç’9^–OÁK@S]Ğ\\ƒÇ7µ²!‚û}Â²%^f"äp' . "\0" . 'ÆJ#vr?íENà#a	Ä¢ï»ÃX]Ò)•Îçe¥ ƒò`‰ªgã°k›*¬6ÍfKÔ½wók¹‘Ø>»Š8ózI‚¤ml‘Á&Z¿±´üø„ÇØpæ#×c®H×!ƒLü¢(@œÌ¢¢q¥Ä¯ô‡Bé†Ò¶ôó¥´ÿÚ«úP¬töÁ•ÎCßgPòŠÃÇã¥!,t=xßá¬IÂğVXúNnØ)ßÑYBg´†ºÁ±Q@C/1TFT>ÊmMnDDîÖTì7M‰×5("xOïÇ×Ú³jJWC*BI3Ñ
PÎB!~tÚYû³Â´a·¤»' . "\0" . '­KG¾Ô²ÏNY4' . "\0" . 's+µ„d`hö}¹@¸ûGä¼uúPå+ïÁœ`h‡É@Òç(Üe<' . "\0" . 'ÄgƒäëÀ+,s“ xEÌpĞFààrİ|(Fù„Ÿ­6MÑİ\\¿SOe*9ŸkÖë{=€l"è–á_ñ^­ï?Šaâ[/p\\€¦u w€#A=XÖ]Ğ h8ô†®*Q†Ã`·kG†‘‚ÒI™LÊLŸµjG’ê€ì^H{¤¥©Röa†ò¤$¦¡RåkáÍá0{
r~Û' . "\0" . 'Í.H­›2åŒóæÔ49x¢±˜ƒìiYÎ2|Q,8£@7˜ìšu2Lê±l€©¹‘Ùx2¶œeª' . "\0" . 'æ;§Ë;ãÂõ–5kß—ğUdrØ+ú¶ŸĞÑıD].ÀXc{vˆ6›IØh(H¼r ã^â0)A^B1µV6ÖN˜ãZª¬˜!»%q”§v¡‡ ›”¼Œ¨&k°8ˆ‡¶+IGâ^4à­XğãA"³H_xå»oú¥í~ê1pò‡­Şl1Ï«jm ªÛß*€~8¬=„µ¶!9ˆkáù‘¦¤lhb±-„ò´¨˜‰pÇrti›Alúşzv°I¼{Ğò¶E+€í¹6Š»cÅf¢²›í4£YÊOëã"Û:¤šj‡åx<4º{¯ëaBX¿ U_R<S`™íCîQ²¹mç7ñN•kÅ€âÙleÃæ%‚#
ç…}{ìI	MÑ÷¼(Cr \\$b' . "\0" . '‘nÙÁ8Ô¢Gg¶©Ğ‡’h©PÂxuNÅ²ªH·xít*@P#M6÷S ­÷|øî—i¬Çc­`]H•ÉJ»BÚwèz~šF(¼¬†Ñ?³Ülè)BV”°õëÖv²øN0Ñz2wùºqàÇ¿dD0ÑÙ·¼ã°”è:P]ëÒSúí€†¢º©0FXq­¥øöêêõìõOW^ÄÀ–ñÚÏIÀñòøCŠfÕ¥Ÿ‡F€>SØå%™Š[Ÿtç6èL²R‘X–gàå{È*£¬ª/nÖø²Oí¢q–›É\\§`Ë®)5—óX»ÏáĞ9NÄÄwt+Ge/&!…y˜vë%a“Ù•Ó#!9!¼ÃÅÑFÑuäÊ4´±ğÍ¿^½=˜ÄxÖñòmğ¹‹nz>ö”Ìd
¬‘B#¢Í¯~ÑÕjFMg(Ãš‹Œ‘çUÜİÄtŠ¸®$Û4¬]NúŒq$ÿĞœ‹Eæé“"„…~ÍL>Ê…c¡‘üÒ÷ÏONÅÆ%¯:]ù¡ŸKåô¿ÄÂèğl»7GĞBD•İÎºş|ß‹C\'
x¹#Ï' . "\0" . '™ô{J9qhËÃ›¨å[¡ó„BK q¡’ˆ&û—L.~,ÇŠ}à¶±;Q£sl÷ÅM¼†N—†¶,v=ZÃÁ·´á‡Cœšı]®øldù^[È^+V_YÅ’Èå@|àÈ õe8Ä{!ÈbÜ	ôyé†ZmfKqvºÖøÛ ?Ö€fè—µª,5)V&7Õe´;ì	v=µSÉC¸jkí$A*ÜñÚ5	™|(ØĞ°ñ•œï½‡ñşÀ$pMGm¿eFkƒèëÜcav8U _âù^tkÖÜªó;"&C²:Áş”Ë§æH‘J˜vWÓè¥ŠÛëvµ³š¨ËªòM–ÇĞÅ¦ÜéËØd\\VÇrLß»n·LÎÊ…¦lÅGÖô¹cæ½ô¸¥>êı^İñ×UÄ¡©ÓŠœ{ÙMıF¹Q’ôœ©FVõOZ0ß¼¼Š‘N	P"˜ë”4ãÌî§7¯¦¨ineñ?,¼Œ;à>ğxC$õ÷Hq¬¤ ƒvä¥P˜_j[a6¾k¹C»P¹%`nÇ5Oz*§“|ĞŸŒ‰Ë·,’ÀòNZO*ëÎÇ¦‚œzßR{‰/Ğk_¾è®%d€#»Ã®±ÿ®4;/œ¨—Î\'o,µ• @™VÛ\\GµGˆª Ê5 kTwSó§ÊbGà…êóîìg¦Ğ£Oínë*øpÔç¤œxÓøƒ2‚GƒŒ wÕeÄïn¸òÒö€ãÃµBQƒÁàqHÊ-/îúº Õî¤¨
ÿfØu°ÈU|(´Ñ×ønœîñÛwZ|ó,¬l“$áÀ@€r3ª¯MŞt=½Ú780AH3Vã¶"+‹·Ôu€¶‰¿†¹¶c>hÁÆv5Şw [d^…¬*d.Ó8ÑÔş\\)>Cö¦Şk©–%ÖpZ™¯ËÆ©C\'b, Ä"ª1ÚMz@\\
!HeáÌ‚—WÛª}DØ0½Ö?M;Û
°òCß’Ö~x}%Ñey™Øu´bã&c' . "\0" . 'ßNÿ^Ä˜¥¨¾a0º3ş9üp7HbÑ²ÛlûxìÇïõ­O®ù®Mp@½ûo	BÀ ¬„R]¯Ï"DØğHqÁ‡`9·0,Õp]¶R^ˆ°ËÁué]ÛÁCåEá™ì9l	²âµÆ¶çAUSƒÃ¨0ı§Ç_=>õ®Åy\\ŠŸ\\‹‹®¬ÁÌÍşÇ€RWäèvËJ<{ıŠÎhçFƒkhPz\'ñá‘×sİ^eîıœ6ˆ–ñiî.¾ÓIèÛOé)Uøƒ#²»÷.xÔb!ü¡åŠ\\0’Çv7œ@ô…ëE²@ş/5ûtã.Â´Á²¾Áù5P¾+>#şL ÀÀ]\'"–¶øÙf™‡]kÏxàßÿ·ªjûùh' . "\0" . 'nto…' . "\0" . '‘[Ä’o·Ğ' . "\0" . '¦hŒ¡ƒõ½çpoæ`«Ùaÿ.ÿşPsçñîáŞ´Ïî~¯ÓÚX³vóÏY†ÿmÿò×÷ôgÓ!}:™å8>ÖæŸU·C¦û‹·ÃZ&ÚñŸÑÈ{‡šÿ?Çüó¯A§kó~şùÿ·Ì/' . "\0" . '‡òP=j“ñÁ0èràÆ5^wÿd6ßltşo=âÿœ²L
€“¥¨‚ÁÿrüFS@|øâñÿË5/ÅŠ«,3Ø' . "\0" . '\'•y¶ SDJÊmÍ-tu1
@}ØâzĞÚ@;.' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'î‰M7%““şŞ' . "\0" . '' . "\0" . '½6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '¤' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT' . "\0" . 'áGUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'Ú‰M7mh
¶’' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '¤' . "\0" . '' . "\0" . 'put_test.htmlUT' . "\0" . 'ìàGUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'ï(' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '
',
      'headers' => 
      array (
        'ETag' => 'a7396b05849c2e5818d9af2c90beb699',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  55 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/',
        'REDIRECT_URI' => '/index.php/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>9696c0fa460d4ed148cb40b2e8388c1e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>60c0afeb8f68b1765e13694b5e7c8c3d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  56 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3f3e5419aff5da5a5f9ef38c571ec272</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>88f535dffe3f6075a0a7461f40325aea</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>a22ba5f3f6bfe26a62130a37fa15133d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>4830744d2e394ce3c4d5667d7125c862</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  57 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/',
        'REDIRECT_URI' => '/index.php/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>9696c0fa460d4ed148cb40b2e8388c1e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>60c0afeb8f68b1765e13694b5e7c8c3d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  58 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3f3e5419aff5da5a5f9ef38c571ec272</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>88f535dffe3f6075a0a7461f40325aea</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>a22ba5f3f6bfe26a62130a37fa15133d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>4830744d2e394ce3c4d5667d7125c862</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  59 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/',
        'REDIRECT_URI' => '/index.php/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>9696c0fa460d4ed148cb40b2e8388c1e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>60c0afeb8f68b1765e13694b5e7c8c3d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  60 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test_non_utf8.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test_non_utf8.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test_non_utf8.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test_non_utf8.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/collection/put_test_non_utf8.txt',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'PHP_SELF' => '/index.php/collection/subdir/put_test_non_utf8.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  61 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test_renamed.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test_renamed.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test_renamed.xml',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test_renamed.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/collection/put_test_renamed.xml',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'PHP_SELF' => '/index.php/collection/subdir/put_test_renamed.xml',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  62 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'PHP_SELF' => '/index.php/collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  63 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/',
        'REDIRECT_URI' => '/index.php/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>9696c0fa460d4ed148cb40b2e8388c1e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>60c0afeb8f68b1765e13694b5e7c8c3d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>90793eca19e036301853f9c45343229d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>179f9baa08daec4f0936fdd8d6f42175</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>5b3d0c9655c1968709225b5c3f5999c5</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  64 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/',
        'REDIRECT_URI' => '/index.php/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>9696c0fa460d4ed148cb40b2e8388c1e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>60c0afeb8f68b1765e13694b5e7c8c3d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>2215ad4a0621fe1f07727e8534c54a95</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>90793eca19e036301853f9c45343229d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>179f9baa08daec4f0936fdd8d6f42175</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>5b3d0c9655c1968709225b5c3f5999c5</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  65 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir/',
        'REDIRECT_URI' => '/index.php/collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/collection/subdir_renamed/',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'PHP_SELF' => '/index.php/collection/subdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  66 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/',
        'REDIRECT_URI' => '/index.php/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>9696c0fa460d4ed148cb40b2e8388c1e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>60c0afeb8f68b1765e13694b5e7c8c3d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>90793eca19e036301853f9c45343229d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>179f9baa08daec4f0936fdd8d6f42175</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>5b3d0c9655c1968709225b5c3f5999c5</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/collection/subdir_renamed</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>23afbf77c7939f68b31aa891b80e1b80</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  67 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/collection/subdir_renamed/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/collection/subdir_renamed/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/collection/subdir_renamed/',
        'REDIRECT_URI' => '/index.php/collection/subdir_renamed/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'PHP_SELF' => '/index.php/collection/subdir_renamed/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  68 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/secure_collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  69 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/", qop=, nc=00000001, cnonce="0a0133f8", response="eafe2a2ac2a1b1e43c5613c419c7e00d"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/", qop=, nc=00000001, cnonce="0a0133f8", response="eafe2a2ac2a1b1e43c5613c419c7e00d"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  70 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/", qop=, nc=00000001, cnonce="11f733ec", response="eafe2a2ac2a1b1e43c5613c419c7e00d"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/", qop=, nc=00000001, cnonce="11f733ec", response="eafe2a2ac2a1b1e43c5613c419c7e00d"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  71 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/file.txt", qop=, nc=00000001, cnonce="11f733ec", response="dd5eea8af103d2bc1e95d5bb71116df8"',
        'PHP_SELF' => '/index.php/secure_collection/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/file.txt", qop=, nc=00000001, cnonce="11f733ec", response="dd5eea8af103d2bc1e95d5bb71116df8"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Some text content.',
      'headers' => 
      array (
        'ETag' => '915f244ec53702ea179db0509d787bde',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  72 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="11f733ec", response="4c8ab45b3b083eb544ad3c7688cf4d25"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="11f733ec", response="4c8ab45b3b083eb544ad3c7688cf4d25"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>63e609ad6597ac5f4a6c399729a4abe0</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>b23a873ef8c0f8e3b33339bed653b763</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  73 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/subdir/newdir", qop=, nc=00000001, cnonce="11f733ec", response="e9d6de969fd2b2a1603e4400a32c97d0"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/subdir/newdir", qop=, nc=00000001, cnonce="11f733ec", response="e9d6de969fd2b2a1603e4400a32c97d0"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  74 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/subdir/newdir/", qop=, nc=00000001, cnonce="11f733ec", response="a1aaf7861b98ff96e98f55996901e47c"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dfdaf952646079f4c2da059c690ffe1", uri="/secure_collection/subdir/newdir/", qop=, nc=00000001, cnonce="11f733ec", response="a1aaf7861b98ff96e98f55996901e47c"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  75 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  76 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/", qop=, nc=00000001, cnonce="0a0133f8", response="f93002e02d8053e68426a557848c1cdb"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/", qop=, nc=00000001, cnonce="0a0133f8", response="f93002e02d8053e68426a557848c1cdb"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  77 => 
  array (
    'request' => 
    array (
      'body' => 'Some text content.',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '18',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '18',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/file.txt", qop=, nc=00000001, cnonce="0a0133f8", response="5ffe0e41f3ce07a6eaec913dc029bb0b"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/file.txt", qop=, nc=00000001, cnonce="0a0133f8", response="5ffe0e41f3ce07a6eaec913dc029bb0b"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'c0405933cd57c9b53258fe1be86b3e4f',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  78 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/", qop=, nc=00000001, cnonce="0a0133f8", response="f93002e02d8053e68426a557848c1cdb"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/", qop=, nc=00000001, cnonce="0a0133f8", response="f93002e02d8053e68426a557848c1cdb"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>c0405933cd57c9b53258fe1be86b3e4f</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  79 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir", qop=, nc=00000001, cnonce="11f733ec", response="1cc8cb15ea2f58ee10625baee5e202b8"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir", qop=, nc=00000001, cnonce="11f733ec", response="1cc8cb15ea2f58ee10625baee5e202b8"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  80 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/", qop=, nc=00000001, cnonce="11f733ec", response="c910c1009bada75751fe047a36ae7313"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/", qop=, nc=00000001, cnonce="11f733ec", response="c910c1009bada75751fe047a36ae7313"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  81 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/", qop=, nc=00000001, cnonce="11f733ec", response="c910c1009bada75751fe047a36ae7313"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/", qop=, nc=00000001, cnonce="11f733ec", response="c910c1009bada75751fe047a36ae7313"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  82 => 
  array (
    'request' => 
    array (
      'body' => 'Some text content.',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '18',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '18',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", qop=, nc=00000001, cnonce="11f733ec", response="2e9101566cf09f77928cb12d1128aafe"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", qop=, nc=00000001, cnonce="11f733ec", response="2e9101566cf09f77928cb12d1128aafe"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'bde09112b72b6fed63ff4e3917ebd56a',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  83 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/", qop=, nc=00000001, cnonce="11f733ec", response="c910c1009bada75751fe047a36ae7313"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/", qop=, nc=00000001, cnonce="11f733ec", response="c910c1009bada75751fe047a36ae7313"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>bde09112b72b6fed63ff4e3917ebd56a</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  84 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/", qop=, nc=00000001, cnonce="11f733ec", response="c910c1009bada75751fe047a36ae7313"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/", qop=, nc=00000001, cnonce="11f733ec", response="c910c1009bada75751fe047a36ae7313"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>bde09112b72b6fed63ff4e3917ebd56a</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  85 => 
  array (
    'request' => 
    array (
      'body' => 'Some text content.',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '18',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '18',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", qop=, nc=00000001, cnonce="11f733ec", response="2e9101566cf09f77928cb12d1128aafe"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", qop=, nc=00000001, cnonce="11f733ec", response="2e9101566cf09f77928cb12d1128aafe"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'bde09112b72b6fed63ff4e3917ebd56a',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  86 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/", qop=, nc=00000001, cnonce="11f733ec", response="c910c1009bada75751fe047a36ae7313"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/newsubdir/", qop=, nc=00000001, cnonce="11f733ec", response="c910c1009bada75751fe047a36ae7313"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>bde09112b72b6fed63ff4e3917ebd56a</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  87 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/", qop=, nc=00000001, cnonce="11f733ec", response="f93002e02d8053e68426a557848c1cdb"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/", qop=, nc=00000001, cnonce="11f733ec", response="f93002e02d8053e68426a557848c1cdb"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>c0405933cd57c9b53258fe1be86b3e4f</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  88 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="11f733ec", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="11f733ec", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>63e609ad6597ac5f4a6c399729a4abe0</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>b23a873ef8c0f8e3b33339bed653b763</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  89 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="11f733ec", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="11f733ec", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>63e609ad6597ac5f4a6c399729a4abe0</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>b23a873ef8c0f8e3b33339bed653b763</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  90 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/", qop=, nc=00000001, cnonce="11f733ec", response="d5c5695d5454bf94cd1c9d91271de873"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/newdir/", qop=, nc=00000001, cnonce="11f733ec", response="d5c5695d5454bf94cd1c9d91271de873"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  91 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="11f733ec", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="11f733ec", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>63e609ad6597ac5f4a6c399729a4abe0</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>b23a873ef8c0f8e3b33339bed653b763</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  92 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/file.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/file.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/file.html',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/file.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/file.html", qop=, nc=00000001, cnonce="11f733ec", response="df90ae6bdc1bf179f93525d800b9322a"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/file.html", qop=, nc=00000001, cnonce="11f733ec", response="df90ae6bdc1bf179f93525d800b9322a"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<html><body><h1>Test</h1></body></html>',
      'headers' => 
      array (
        'ETag' => '63e609ad6597ac5f4a6c399729a4abe0',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/html; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  93 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/file.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/file.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/file.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/file.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/file.xml", qop=, nc=00000001, cnonce="11f733ec", response="8900a196038466fc317aa96e45a85d69"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/file.xml", qop=, nc=00000001, cnonce="11f733ec", response="8900a196038466fc317aa96e45a85d69"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml?>
<content/>',
      'headers' => 
      array (
        'ETag' => 'b23a873ef8c0f8e3b33339bed653b763',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  94 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="11f733ec", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="11f733ec", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>63e609ad6597ac5f4a6c399729a4abe0</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>b23a873ef8c0f8e3b33339bed653b763</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  95 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/file.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/file.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/file.html',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/file.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/file.html", qop=, nc=00000001, cnonce="11f733ec", response="4dca82ba522980299229ceafbadcee95"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/file.html", qop=, nc=00000001, cnonce="11f733ec", response="4dca82ba522980299229ceafbadcee95"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  96 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/file.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/file.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/file.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/file.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/file.xml", qop=, nc=00000001, cnonce="1415c574", response="6e0e34fdaccde52139f6e5b8b717aaca"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/file.xml", qop=, nc=00000001, cnonce="1415c574", response="6e0e34fdaccde52139f6e5b8b717aaca"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  97 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="2750ac20", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="2750ac20", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  98 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="generator" content="Docutils 0.4: http://docutils.sourceforge.net/" /><title>eZ component: Webdav, Design, 1.0</title><meta name="author" content="Kore Nordmann, Tobias Schlitt" /><meta name="date" content="$Date$" /><style type="text/css">

/*
:Author: David Goodger
:Contact: goodger@users.sourceforge.net
:Date: $Date: 2005-12-18 01:56:14 +0100 (Sun, 18 Dec 2005) $
:Revision: $Revision: 4224 $
:Copyright: This stylesheet has been placed in the public domain.

Default cascading style sheet for the HTML output of Docutils.

See http://docutils.sf.net/docs/howto/html-stylesheets.html for how to
customize this style sheet.
*/

/* used to remove borders from tables and images */
.borderless, table.borderless td, table.borderless th {
  border: 0 }

table.borderless td, table.borderless th {
  /* Override padding for "table.docutils td" with "! important".
     The right padding separates the table cells. */
  padding: 0 0.5em 0 0 ! important }

.first {
  /* Override more specific margin styles with "! important". */
  margin-top: 0 ! important }

.last, .with-subtitle {
  margin-bottom: 0 ! important }

.hidden {
  display: none }

a.toc-backref {
  text-decoration: none ;
  color: black }

blockquote.epigraph {
  margin: 2em 5em ; }

dl.docutils dd {
  margin-bottom: 0.5em }

/* Uncomment (and remove this text!) to get bold-faced definition list terms
dl.docutils dt {
  font-weight: bold }
*/

div.abstract {
  margin: 2em 5em }

div.abstract p.topic-title {
  font-weight: bold ;
  text-align: center }

div.admonition, div.attention, div.caution, div.danger, div.error,
div.hint, div.important, div.note, div.tip, div.warning {
  margin: 2em ;
  border: medium outset ;
  padding: 1em }

div.admonition p.admonition-title, div.hint p.admonition-title,
div.important p.admonition-title, div.note p.admonition-title,
div.tip p.admonition-title {
  font-weight: bold ;
  font-family: sans-serif }

div.attention p.admonition-title, div.caution p.admonition-title,
div.danger p.admonition-title, div.error p.admonition-title,
div.warning p.admonition-title {
  color: red ;
  font-weight: bold ;
  font-family: sans-serif }

/* Uncomment (and remove this text!) to get reduced vertical space in
   compound paragraphs.
div.compound .compound-first, div.compound .compound-middle {
  margin-bottom: 0.5em }

div.compound .compound-last, div.compound .compound-middle {
  margin-top: 0.5em }
*/

div.dedication {
  margin: 2em 5em ;
  text-align: center ;
  font-style: italic }

div.dedication p.topic-title {
  font-weight: bold ;
  font-style: normal }

div.figure {
  margin-left: 2em ;
  margin-right: 2em }

div.footer, div.header {
  clear: both;
  font-size: smaller }

div.line-block {
  display: block ;
  margin-top: 1em ;
  margin-bottom: 1em }

div.line-block div.line-block {
  margin-top: 0 ;
  margin-bottom: 0 ;
  margin-left: 1.5em }

div.sidebar {
  margin-left: 1em ;
  border: medium outset ;
  padding: 1em ;
  background-color: #ffffee ;
  width: 40% ;
  float: right ;
  clear: right }

div.sidebar p.rubric {
  font-family: sans-serif ;
  font-size: medium }

div.system-messages {
  margin: 5em }

div.system-messages h1 {
  color: red }

div.system-message {
  border: medium outset ;
  padding: 1em }

div.system-message p.system-message-title {
  color: red ;
  font-weight: bold }

div.topic {
  margin: 2em }

h1.section-subtitle, h2.section-subtitle, h3.section-subtitle,
h4.section-subtitle, h5.section-subtitle, h6.section-subtitle {
  margin-top: 0.4em }

h1.title {
  text-align: center }

h2.subtitle {
  text-align: center }

hr.docutils {
  width: 75% }

img.align-left {
  clear: left }

img.align-right {
  clear: right }

ol.simple, ul.simple {
  margin-bottom: 1em }

ol.arabic {
  list-style: decimal }

ol.loweralpha {
  list-style: lower-alpha }

ol.upperalpha {
  list-style: upper-alpha }

ol.lowerroman {
  list-style: lower-roman }

ol.upperroman {
  list-style: upper-roman }

p.attribution {
  text-align: right ;
  margin-left: 50% }

p.caption {
  font-style: italic }

p.credits {
  font-style: italic ;
  font-size: smaller }

p.label {
  white-space: nowrap }

p.rubric {
  font-weight: bold ;
  font-size: larger ;
  color: maroon ;
  text-align: center }

p.sidebar-title {
  font-family: sans-serif ;
  font-weight: bold ;
  font-size: larger }

p.sidebar-subtitle {
  font-family: sans-serif ;
  font-weight: bold }

p.topic-title {
  font-weight: bold }

pre.address {
  margin-bottom: 0 ;
  margin-top: 0 ;
  font-family: serif ;
  font-size: 100% }

pre.literal-block, pre.doctest-block {
  margin-left: 2em ;
  margin-right: 2em ;
  background-color: #eeeeee }

span.classifier {
  font-family: sans-serif ;
  font-style: oblique }

span.classifier-delimiter {
  font-family: sans-serif ;
  font-weight: bold }

span.interpreted {
  font-family: sans-serif }

span.option {
  white-space: nowrap }

span.pre {
  white-space: pre }

span.problematic {
  color: red }

span.section-subtitle {
  /* font-size relative to parent (h1..h6 element) */
  font-size: 80% }

table.citation {
  border-left: solid 1px gray;
  margin-left: 1px }

table.docinfo {
  margin: 2em 4em }

table.docutils {
  margin-top: 0.5em ;
  margin-bottom: 0.5em }

table.footnote {
  border-left: solid 1px black;
  margin-left: 1px }

table.docutils td, table.docutils th,
table.docinfo td, table.docinfo th {
  padding-left: 0.5em ;
  padding-right: 0.5em ;
  vertical-align: top }

table.docutils th.field-name, table.docinfo th.docinfo-name {
  font-weight: bold ;
  text-align: left ;
  white-space: nowrap ;
  padding-left: 0 }

h1 tt.docutils, h2 tt.docutils, h3 tt.docutils,
h4 tt.docutils, h5 tt.docutils, h6 tt.docutils {
  font-size: 100% }

tt.docutils {
  background-color: #eeeeee }

ul.auto-toc {
  list-style-type: none }

</style></head><body><div class="document" id="ez-component-webdav-design-1-0"><h1 class="title">eZ component: Webdav, Design, 1.0</h1><table class="docinfo" frame="void" rules="none"><col class="docinfo-name" /><col class="docinfo-content" /><tbody valign="top"><tr><th class="docinfo-name">Author:</th><td>Kore Nordmann, Tobias Schlitt</td></tr><tr><th class="docinfo-name">Revision:</th><td>$Rev$</td></tr><tr><th class="docinfo-name">Date:</th><td>$Date$</td></tr><tr><th class="docinfo-name">Status:</th><td>Draft</td></tr></tbody></table><div class="contents topic"><p class="topic-title first"><a id="contents" name="contents">Contents</a></p><ul class="simple"><li><a class="reference" href="#scope" id="id1" name="id1">Scope</a></li><li><a class="reference" href="#design-overview" id="id2" name="id2">Design overview</a></li><li><a class="reference" href="#tiers" id="id3" name="id3">Tiers</a></li><li><a class="reference" href="#classes" id="id4" name="id4">Classes</a><ul><li><a class="reference" href="#ezcwebdavserver" id="id5" name="id5">ezcWebdavServer</a></li><li><a class="reference" href="#ezcwebdavbackend" id="id6" name="id6">ezcWebdavBackend</a></li><li><a class="reference" href="#ezcwebdavtransport" id="id7" name="id7">ezcWebdavTransport</a></li><li><a class="reference" href="#ezcwebdavpathfactory" id="id8" name="id8">ezcWebdavPathFactory</a></li></ul></li><li><a class="reference" href="#example-code" id="id9" name="id9">Example code</a></li></ul></div><div class="section"><h1><a class="toc-backref" href="#id1" id="scope" name="scope">Scope</a></h1><p>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> protocol.</p><p>It is currently not planned to also offer a WebDAV client component.</p></div><div class="section"><h1><a class="toc-backref" href="#id2" id="design-overview" name="design-overview">Design overview</a></h1><p>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</p><p>The main class of this component will provide a fully <a class="reference" href="http://tools.ietf.org/html/rfc2518">RFC 2518</a> compliant
implementation of a <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</p><p>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</p></div><div class="section"><h1><a class="toc-backref" href="#id3" id="tiers" name="tiers">Tiers</a></h1><p>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</p><p>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</p><p>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</p><p>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</p></div><div class="section"><h1><a class="toc-backref" href="#id4" id="classes" name="classes">Classes</a></h1><div class="section"><h2><a class="toc-backref" href="#id5" id="ezcwebdavserver" name="ezcwebdavserver">ezcWebdavServer</a></h2><p>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</p><p>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</p><p>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</p><p>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</p><p>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</p><p>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</p><p>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</p></div><div class="section"><h2><a class="toc-backref" href="#id6" id="ezcwebdavbackend" name="ezcwebdavbackend">ezcWebdavBackend</a></h2><p>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</p><ul class="simple"><li>head()</li><li>get()</li><li>propFind()</li><li>propFetch()</li></ul><p>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</p><p>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</p><p>The logical groups of capabilities are:</p><dl class="docutils"><dt>Put</dt><dd>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</dd><dt>Change</dt><dd>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</dd><dt>Make collection</dt><dd>The creation of new collections also makes up a capability unit and can
optionally be implemented.</dd><dt>Lock</dt><dd>If the hander provides locking facilities on its own, the main server object
must not take care about that.</dd><dt>GZIP-Compress</dt><dd>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</dd></dl><p>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</p></div><div class="section"><h2><a class="toc-backref" href="#id7" id="ezcwebdavtransport" name="ezcwebdavtransport">ezcWebdavTransport</a></h2><p>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</p><p>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</p><p>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</p><p>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</p><p>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</p><p>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</p><p>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</p><p>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</p></div><div class="section"><h2><a class="toc-backref" href="#id8" id="ezcwebdavpathfactory" name="ezcwebdavpathfactory">ezcWebdavPathFactory</a></h2><p>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</p><p>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</p><p>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</p><p>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</p><p>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</p><p>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</p></div></div><div class="section"><h1><a class="toc-backref" href="#id9" id="example-code" name="example-code">Example code</a></h1><p>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</p><pre class="literal-block">
    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();
</pre><!-- Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79 --></div></div></body></html>

',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '18675',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '18675',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test.html", qop=, nc=00000001, cnonce="2750ac20", response="a3674ca43d5efaec7cd0dc5aa9574333"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test.html", qop=, nc=00000001, cnonce="2750ac20", response="a3674ca43d5efaec7cd0dc5aa9574333"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '866d436fdb9577521a1d1acd440e1026',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  99 => 
  array (
    'request' => 
    array (
      'body' => 'This is an UTF-8 test file
==========================

This file contains a variaty of Unicode characters to test with the eZ Webdav
component.

Greek letters
-------------

Î‘ Î’ Î“ Î” Î• Î– Î— Î˜ Î™ Îš Î› Îœ Î Î ÎŸ Î  Î¡ Î£ Î¤ Î¥ Î¦ Î§ Î¨ Î© 

Î± Î² Î³ Î´ Îµ Î¶ Î· Î¸ Î¹ Îº Î» Î¼ Î½ Î¾ Î¿ Ï€ Ï Ïƒ Ï„ Ï… Ï• Ï‡ Ïˆ Ï‰

Mathematical characters
-----------------------

â„‚ â„• â„š â„ â„¤ âˆ€ âˆ âˆ‚ âˆƒ âˆ„ âˆ… âˆˆ âˆ‰ âˆ‹ âˆŒ âˆ âˆ âˆ âˆ âˆ‘ + âˆ’ âˆ“ âˆ• âˆ– âˆ— âˆ˜ âˆš âˆ› âˆœ âˆ âˆ âˆ£ âˆ¤ âˆ§ âˆ¨ âˆ© âˆª âˆ«
âˆ¬ âˆ­ = â‰” â‰• â‰™ â‰ â‰  â‰¡ â‰¢ < > â‰¤ â‰¥ â‰ª â‰« â‰® â‰¯ â‰° â‰± â‰º â‰» â‰¼ â‰½ âŠ€ âŠ âŠ‚ âŠƒ âŠ„ âŠ… âŠ† âŠ‡ âŠˆ âŠ‰ âŠ• âŠ– âŠ— âŠ™ âŠš
âŠ› âŠœ âŠ âŠ¢ âŠ£ âŠ¤ âŠ¥ âŠ§ âŠ¬ âŠ¶ âŠ· âŠ» âŠ¼ âŠ½ â€° â€± 

',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '740',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '740',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_utf8_content.txt", qop=, nc=00000001, cnonce="2750ac20", response="3f32e58001f4bd1836e706eef1d0f451"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_utf8_content.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_utf8_content.txt", qop=, nc=00000001, cnonce="2750ac20", response="3f32e58001f4bd1836e706eef1d0f451"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '94ad488564aca44123a62c6f22c090dd',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  100 => 
  array (
    'request' => 
    array (
      'body' => 'This is an UTF-8 test file
==========================

This file contains a variaty of Unicode characters to test with the eZ Webdav
component.

Greek letters
-------------

Î‘ Î’ Î“ Î” Î• Î– Î— Î˜ Î™ Îš Î› Îœ Î Î ÎŸ Î  Î¡ Î£ Î¤ Î¥ Î¦ Î§ Î¨ Î© 

Î± Î² Î³ Î´ Îµ Î¶ Î· Î¸ Î¹ Îº Î» Î¼ Î½ Î¾ Î¿ Ï€ Ï Ïƒ Ï„ Ï… Ï• Ï‡ Ïˆ Ï‰

Mathematical characters
-----------------------

â„‚ â„• â„š â„ â„¤ âˆ€ âˆ âˆ‚ âˆƒ âˆ„ âˆ… âˆˆ âˆ‰ âˆ‹ âˆŒ âˆ âˆ âˆ âˆ âˆ‘ + âˆ’ âˆ“ âˆ• âˆ– âˆ— âˆ˜ âˆš âˆ› âˆœ âˆ âˆ âˆ£ âˆ¤ âˆ§ âˆ¨ âˆ© âˆª âˆ«
âˆ¬ âˆ­ = â‰” â‰• â‰™ â‰ â‰  â‰¡ â‰¢ < > â‰¤ â‰¥ â‰ª â‰« â‰® â‰¯ â‰° â‰± â‰º â‰» â‰¼ â‰½ âŠ€ âŠ âŠ‚ âŠƒ âŠ„ âŠ… âŠ† âŠ‡ âŠˆ âŠ‰ âŠ• âŠ– âŠ— âŠ™ âŠš
âŠ› âŠœ âŠ âŠ¢ âŠ£ âŠ¤ âŠ¥ âŠ§ âŠ¬ âŠ¶ âŠ· âŠ» âŠ¼ âŠ½ â€° â€± 

',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '740',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '740',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt", qop=, nc=00000001, cnonce="2750ac20", response="a942f30ff627655e127ce316e39b0c07"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt", qop=, nc=00000001, cnonce="2750ac20", response="a942f30ff627655e127ce316e39b0c07"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '29909daed84fd350d162e0d7b9b76483',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  101 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="2750ac20", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="2750ac20", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>866d436fdb9577521a1d1acd440e1026</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>94ad488564aca44123a62c6f22c090dd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>29909daed84fd350d162e0d7b9b76483</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  102 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="09920fb9", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="09920fb9", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>866d436fdb9577521a1d1acd440e1026</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>94ad488564aca44123a62c6f22c090dd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>29909daed84fd350d162e0d7b9b76483</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  103 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="09920fb9", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="09920fb9", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>866d436fdb9577521a1d1acd440e1026</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>94ad488564aca44123a62c6f22c090dd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>29909daed84fd350d162e0d7b9b76483</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  104 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/put_test_renamed.xml',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test.html", qop=, nc=00000001, cnonce="09920fb9", response="ab8477c93e27e490dbf476c54d4db979"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test.html", qop=, nc=00000001, cnonce="09920fb9", response="ab8477c93e27e490dbf476c54d4db979"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  105 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="17599f0b", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="17599f0b", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>94ad488564aca44123a62c6f22c090dd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>29909daed84fd350d162e0d7b9b76483</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>502bbb712c359f4a1c4699d4b5c9ff27</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  106 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="17599f0b", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="17599f0b", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>94ad488564aca44123a62c6f22c090dd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>29909daed84fd350d162e0d7b9b76483</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>502bbb712c359f4a1c4699d4b5c9ff27</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  107 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/put_test_non_utf8.txt',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt", qop=, nc=00000001, cnonce="17599f0b", response="8f434c02d66a73f2b85aaba82907d29e"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_Ã¶Ã¼Ã¤ÃŸ.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_%C3%B6%C3%BC%C3%A4%C3%9F.txt", qop=, nc=00000001, cnonce="17599f0b", response="8f434c02d66a73f2b85aaba82907d29e"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  108 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="004aa0e3", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="004aa0e3", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>94ad488564aca44123a62c6f22c090dd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>502bbb712c359f4a1c4699d4b5c9ff27</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>cf5657d4ea808c2f8b300e5b148df562</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  109 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="004aa0e3", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="004aa0e3", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>94ad488564aca44123a62c6f22c090dd</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>502bbb712c359f4a1c4699d4b5c9ff27</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>cf5657d4ea808c2f8b300e5b148df562</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  110 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_utf8_content.txt", qop=, nc=00000001, cnonce="004aa0e3", response="fae75122579098a954ec54f238d6a863"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_utf8_content.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_utf8_content.txt", qop=, nc=00000001, cnonce="004aa0e3", response="fae75122579098a954ec54f238d6a863"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  111 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="004aa0e3", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="004aa0e3", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>502bbb712c359f4a1c4699d4b5c9ff27</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>cf5657d4ea808c2f8b300e5b148df562</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>22789e94da0ed3d0c1d084816e366220</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  112 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection", qop=, nc=00000001, cnonce="004aa0e3", response="f5637ab997e61c14ef28728a6abe1b54"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection", qop=, nc=00000001, cnonce="004aa0e3", response="f5637ab997e61c14ef28728a6abe1b54"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  113 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?><!DOCTYPE document PUBLIC "+//IDN docutils.sourceforge.net//DTD Docutils Generic//EN//XML" "http://docutils.sourceforge.net/docs/ref/docutils.dtd"><!-- Generated by Docutils 0.4 --><document ids="ez-component-webdav-design-1-0" names="ez\\ component:\\ webdav,\\ design,\\ 1.0" source="Webdav/design/design.txt" title="eZ component: Webdav, Design, 1.0"><title>eZ component: Webdav, Design, 1.0</title><docinfo><author>Kore Nordmann, Tobias Schlitt</author><revision>$Rev$</revision><date>$Date$</date><status>Draft</status></docinfo><topic classes="contents" ids="contents" names="contents"><title>Contents</title><bullet_list><list_item><paragraph><reference ids="id1" refid="scope">Scope</reference></paragraph></list_item><list_item><paragraph><reference ids="id2" refid="design-overview">Design overview</reference></paragraph></list_item><list_item><paragraph><reference ids="id3" refid="tiers">Tiers</reference></paragraph></list_item><list_item><paragraph><reference ids="id4" refid="classes">Classes</reference></paragraph><bullet_list><list_item><paragraph><reference ids="id5" refid="ezcwebdavserver">ezcWebdavServer</reference></paragraph></list_item><list_item><paragraph><reference ids="id6" refid="ezcwebdavbackend">ezcWebdavBackend</reference></paragraph></list_item><list_item><paragraph><reference ids="id7" refid="ezcwebdavtransport">ezcWebdavTransport</reference></paragraph></list_item><list_item><paragraph><reference ids="id8" refid="ezcwebdavpathfactory">ezcWebdavPathFactory</reference></paragraph></list_item></bullet_list></list_item><list_item><paragraph><reference ids="id9" refid="example-code">Example code</reference></paragraph></list_item></bullet_list></topic><section ids="scope" names="scope"><title refid="id1">Scope</title><paragraph>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> protocol.</paragraph><target ids="webdav" names="webdav" refuri="http://en.wikipedia.org/wiki/WebDAV"/><paragraph>It is currently not planned to also offer a WebDAV client component.</paragraph></section><section ids="design-overview" names="design\\ overview"><title refid="id2">Design overview</title><paragraph>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</paragraph><paragraph>The main class of this component will provide a fully <reference name="RFC 2518" refuri="http://tools.ietf.org/html/rfc2518">RFC 2518</reference> compliant
implementation of a <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</paragraph><target ids="rfc-2518" names="rfc\\ 2518" refuri="http://tools.ietf.org/html/rfc2518"/><paragraph>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</paragraph></section><section ids="tiers" names="tiers"><title refid="id3">Tiers</title><paragraph>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</paragraph><paragraph>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</paragraph><paragraph>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</paragraph><paragraph>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</paragraph></section><section ids="classes" names="classes"><title refid="id4">Classes</title><section ids="ezcwebdavserver" names="ezcwebdavserver"><title refid="id5">ezcWebdavServer</title><paragraph>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</paragraph><paragraph>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</paragraph><paragraph>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</paragraph><paragraph>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</paragraph><paragraph>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</paragraph><paragraph>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</paragraph><paragraph>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</paragraph></section><section ids="ezcwebdavbackend" names="ezcwebdavbackend"><title refid="id6">ezcWebdavBackend</title><paragraph>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</paragraph><bullet_list bullet="-"><list_item><paragraph>head()</paragraph></list_item><list_item><paragraph>get()</paragraph></list_item><list_item><paragraph>propFind()</paragraph></list_item><list_item><paragraph>propFetch()</paragraph></list_item></bullet_list><paragraph>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</paragraph><paragraph>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</paragraph><paragraph>The logical groups of capabilities are:</paragraph><definition_list><definition_list_item><term>Put</term><definition><paragraph>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</paragraph></definition></definition_list_item><definition_list_item><term>Change</term><definition><paragraph>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</paragraph></definition></definition_list_item><definition_list_item><term>Make collection</term><definition><paragraph>The creation of new collections also makes up a capability unit and can
optionally be implemented.</paragraph></definition></definition_list_item><definition_list_item><term>Lock</term><definition><paragraph>If the hander provides locking facilities on its own, the main server object
must not take care about that.</paragraph></definition></definition_list_item><definition_list_item><term>GZIP-Compress</term><definition><paragraph>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</paragraph></definition></definition_list_item></definition_list><paragraph>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</paragraph></section><section ids="ezcwebdavtransport" names="ezcwebdavtransport"><title refid="id7">ezcWebdavTransport</title><paragraph>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</paragraph><paragraph>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</paragraph><paragraph>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</paragraph><paragraph>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</paragraph><paragraph>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</paragraph><paragraph>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</paragraph><paragraph>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</paragraph><paragraph>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</paragraph></section><section ids="ezcwebdavpathfactory" names="ezcwebdavpathfactory"><title refid="id8">ezcWebdavPathFactory</title><paragraph>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</paragraph><paragraph>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</paragraph><paragraph>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</paragraph><paragraph>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</paragraph></section></section><section ids="example-code" names="example\\ code"><title refid="id9">Example code</title><paragraph>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</paragraph><literal_block xml:space="preserve">    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();</literal_block><comment xml:space="preserve">Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79</comment></section></document>
',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '14011',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '14011',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/put_test.xml", qop=, nc=00000001, cnonce="004aa0e3", response="b1d7bb8471421e1afdfd0583fa5e01ab"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/put_test.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/put_test.xml", qop=, nc=00000001, cnonce="004aa0e3", response="b1d7bb8471421e1afdfd0583fa5e01ab"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '5ad59a93c1eb407447585fc830b848a7',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  114 => 
  array (
    'request' => 
    array (
      'body' => 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'î‰M7%““şŞ' . "\0" . '' . "\0" . '½6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT	' . "\0" . 'áGáGUx' . "\0" . 'èd' . "\0" . '½[isÛ6şÎ_Õtš¤«£IÛmëÚê$qÒf¶‡\'u÷šÌt ”P“—' . "\0" . '­¨¿~ß ARrãnvû!–(' . "\0" . 'ïı¼Øó¯ß–…¸UÕ¦º˜=^~<ªJM¦«íÅ¬uùâ‹Ù×ëäüO—?>¿şçÕ‘™´-UåÄÕÏÏ¾{õ\\Ìş¼Z½ºü;]Ø¥5m“ªÜ4[µ¬”[­.¯/Å¥ÿU|£*ÕètµzñÃjõï¿›‰ÙÎ¹úlµ:y' . "\0" . 'ü`WÊû™ËfÈÓbÁçI§2±9ôT>^~*XÒq«3{1S¿-RSÖ¦‚\'‹½Údòv‘)«·Õâñ¯d©hÙÑ­;{#xåüàµğÔÄ|^ÌşN?¯øGÿgéŞº™pÚ°@ı+:Nğò¹¸äÃè¬õ9-]ÿîÊó/DÁt•›õ¹lİÎ4ë¿šF‰L“•²‚¥×f£¥?¥»B;w¾ò«Îu«ÑÒë^«ÛÎWİ÷ó”¸şàş…ÇôåÜ:éZ»¾ldGøoç«´3µNEZHkQm©©ğmg¬ìş«Wk÷ HûÜ?è„Ú´E¡Ü/…¶n}ÿş¢*×çµlä¶‘õÈUª˜ˆÎÏ<ÓÙÅÌ¦¦V³õOø%óãhÿ*:ö)<é(x_1.·Zígk¶ŒŞ\'ÕO:ªNCtÎÖ×øç}Rø´£àM8[?ç\'©ü}Ö‘Q¿¥JÔ¥šÙ°ÿDŞ§p™RİÈôFUYDö?yŸt?ŸÒu¬lmQ¾ÏŞ\'í/¦´kév¹Liõ+xú’Ÿ¾ıÕÀî€³/{ÎŞÊ².àp±ú‚¿	üöG8! R©cjt<(0â&5Nxèéé]ï” ]ÂäÂí´íS|v³@Úè‚AÀJ;-Ÿp‹ì!<q;éDİ˜[¿Ã/ şË§ìÿs±ßét\'ö¦¹±b¯İNÈ¢¥üÕ4ÂÀáĞ¨$-Q>›GJD
F1)Á¹¤ä¶Ñ!¥ªj¹×7ºV™–KÈ§+ü¶ò‹×ü7V;²êLjŠåÀ' . "\0" . 'NB*ö)”İªSoøzÂ«XÛ¯H«iÛ' . "\0" . '®8ˆÊ€Â
ÈaÑA×²°”
öÚKÆè´<dvåaäcèğó7¢Çô±«<9ó§y¦RÙZï2JÜÊFKwÀ¯›v»=Yeà*È2x¯Û×±psò¸¤“Ü\\Â{œ"äÆ°` ÛB\\ÉLçdF\'*¥2»Ï€éL‘ÎãÀ‡S€‚Âp«F¦~íÉeCÅ#¤”ºâÔß…É)¦E1{˜:íë—ÏÅ“Ï1ñgyZ¹œ|gçÊbÕä)­]‡]¿%Åj	7Ô,Çãÿ,\\8—â)8YõRè´Aºi”k´ºÅà¯’x;ğ‰üš,pòÖ¦Š9(€E†2M	µ8ªQÿn•…b7xj‚ï€i;>Ä]ciK®e°§|t:¨A¹¶„
xğæş¶öÓ,ÓÈ @ÚaN À£øŠ#ˆ­+@;íˆãÈ³¼C&CŠVT¬ìØİĞ@7¥ïAò' . "\0" . 'J¦h©}x&èCCGbqj' . "\0" . 'R„#Bepjj-±Äşğß­q_QPóG¸	£ÄİSá®' . "\0" . '. Òª©I˜lŸ@¥nJX˜¢âØP_‚gŞ<{Şız×CÛKïŠ\\Y£û:sŒŸt¥çÑTÙG=Xd#­g<S$‚Ÿ:ûLà´~ƒ@¢¤Qu£,À=\\ç^:2ò]!¦1Ê –ª¬Ş€w µÕƒF%ü’*}\'ûĞ¡œÒ)°«ÌB0vşˆ1XK<ˆÀv‚wAãäTQ' . "\0" . 'T=`m¡ ÊHKánEÂ§lD"!ÏÈá?%d&„™E½edÇò¡Q@M¢9*„r9TÊÖ7Ê¤:›F;¶‘Z8Äl~İ,ÑV°dğĞ‹P%5rê„$âÍåwŸPÏ3‰Û0{UIÌãÃÒJoXkdŒh­(ãhg!µé&ó¾„kÚÀ"¡×ıR¼â”lá%é‹²¢H*ğkes’9®µ9©' . "\0" . 'Š”ò°	„’ØoaQ@\\¨²-º¬„u¼•º@\'’E‹‚¡z¨’>«ç' . "\0" . '' . "\0" . 'm£l(1¼œ@ĞÔŠ+€±Êˆ½<Ì©øHX±ê‡Êî!WW„1ÒùÊ´ªiLSİ@}#/Ìí×˜v»#b
øg¹…@gT™-	Š·±¿é‚ôˆÆØá×\'¼¾¤ÜŠk°~º=¨4ù
*òDÑ' . "\0" . 'O™E»#¥ÄSºĞ†»…„†{¶ŸF=¸‡ÛÁAãºYZëñÁŸé¶âùhU²îHÕI"·
ÜµH1	›¡#ÇBéƒhœ²P¹QT*·3‹£©­9,Úªğ£tày˜\\gcfÕT®ÂƒJw:+à8k‹øÑéIg~Zš.çV¹Ş¶MÀQätÒp–-€ÚFA%0öê¡‡B€p‹y<Î;ŸO[¾åññÊÕ…vX	$CÊİ4pÃ°òš8½en„ªˆÎ8ãtğÄµk„1}¹g§MÛ$\'Tô°Ğ7J&½ÁS)¶\\›çî‚“‘LÁò¤gH}ø‹n•wƒñ„ç[¯¤GÛz„› F°Î' . "\0" . '“uŸ1(3Ayƒ³LMÅ#=0£Gnéc˜2Uµ½¾‚Õü;TñÖ½ÎzöÈ\\JÓ Àç*¡’øtÈ“ªÈ…÷iauBí?µ@¢OXy[¥\\ÌcIš¶€°5Ë“qÁˆïÙ\'fÔïë`“\'ãzÛØZ™/ûBtW‹L• ËÉ-zODòSïf{‡Üm|œLrß+Á' . "\0" . '´òÒ—	ŒS\'µG#$ğ÷L‚"¤A­"˜v8Ã:‘ ,“z&”}µS`g‡µ²¥¾ù³;2FIõnŸ•(/0SDƒGÁ©IîÉÉ2âĞöíó‘”ƒÔIo©UŠC°Q£#³È¸°¿?~¶d¤Œ¹ÏAPxìôv‡bİhİááRídÜ;I‘İxœ#ÿrl4<I’èq#D²üòæ¨)Š@Êr¢êæ0ˆW<ê\\b¶_å](€¸ÇŠ\'‰”“¢¡' . "\0" . '»mF»”ß6Qö-IÍ*4g§fı‚?_Ì³#ß’ÙÃG÷`CŠ¿ï€Èú%`÷Ú§ DîØ8-íÍÓX¯óHÍÔ×ŒŒ^£Ùõå¤@[ã¾`"CÀ&ƒb˜øŠ·ú¨J&~ˆ‡ÜFGwì`ºíp¯wXÛÖîID*ôeŞóæ‚RvİB|¦@h¨ò$ ÷…–ÅŸ' . "\0" . 'Åus eªXnìª¨<H6Ú•ÒŞ Jø=èÔ¡òª×<w ra¶8 [èHj*b‡­×8ÈH$÷‹Ñï; Ör}Õ:€ü­3' . "\0" . 'jìI:Áíœ{­~,Ø KzŠ*Áy^ÒÖ˜8­¸ÕR|{}}µ¸úùÚ›k„‘1#«ã¼ß!Ñs2÷ï	œÚvÓ·Ó0	I4S8ı725ÄK¨Ëã…Î$YzGJ–ÿRÂï¡_ˆ
äß·â|¯öÑ^Ë—Üeb¿Û¹…ÓHblÄbpíÆ{í;¨ï–\'šŒ`	Ú°PœPtPSQR2ûj~¢RK(ÑaëH¥DrcZG~ı^ûæ_¯®Ï!Ãb)t·„ß\\À ¥a/İ
éL&P¥…‡“¡6¿éú	åèŒ®c|İuIÆGƒF€4ĞQvDÇ¬ô½Î‘RYs†¯ßø‡£‚]pdP˜ÔúÉög??—¼ê½ÒÏ¹ı^šİ¯ë/À\'µXt7>®Æ>?~]>­ÇÂˆbbâş¢k¦a+E#÷ !ç%ÃQ(×m¸´ãäu4võ3ª0Rğ…YUëBmö?òùKñcul
Ü¶¶e|huCëxxŞX¤á6§s§XE=…ÅŠ<§·s°]‹l\\áfp#ä` ÍÍ”ÄŠPUÊ‘6\\À8ùUv¾içÙ¾IÚÒ@»ëº¨rÁs™ÏŸkBÚ—·Õª-ÚöÔ÷0°8èîWte@ÃÓcÉ$(‰Çˆ~.IJ İ Ï!¥MõæŒ~$á/”ÂzÕxBºë®8P£Ä
F±ƒxô¦7g@ª»~éb€çÏ^@â9‹áòÃß-û.O¤æ»rıbi°ä-
Bâª6º£`CúÙ«\'¬A-*·WªÏ$ÇU÷E Vó#%t @çyŠì´I®¬Q4‰æOƒÆ®;ı(rLá$»ı(:;…Nœõ\'}£ÜQ
ôœ‰œ' . "\0" . 'à÷Éğ:u2–üæÅu4Œ€ *ĞŞ¢®û~ıjnÁÓ^ì1#/w@>‡y¯%_Å¥ğL/Û /¥ÂfDÛ’¼¸õƒú=:‘*,A>€x‰¬Ü29åÜlğÍZ½xL{~n—–÷Òú£²şÂx.øv€İi/0w†óºa°Ÿ†ss	%şï¿{1¬’47•Ù{]E—K|3ÍúÁU;	ö”Ét¨Äã‚îŠ]•4‘	¸—h Úç!eñNŠÆPıUé<cp>]øX7T…«p¾U	!‰÷”ûÕño“jcğ6Ü¸ŞøâÔrG®IâËçRÑàÌà…`Ês_¾qAı{KB‘7¦$1ƒGnâkÑ­¾°£íûıÑß7Ñd' . "\0" . 'ÚX¸0L 2æF¦hûÁvcŒ]"à«Q¸Ó^KØÏ=\'R†›tbw³»ã´àcûßPjÚÂJY×Èk¦q£iüEkü…—w\\³ø ¶ác¢@”)†EI¯ql˜Å*êÓNÉìÑóL±ÂCWÎ¬˜“e½«»GÔ€¿&õãR1øáÄÑÿ4-È}' . "\0" . 'È`O	“ş²¦èñë`¨§şæ×kÌ†j§S*ÏáR÷Îâ€µWŠ–ã—€ŞEn]Ê­²cY‘d¹³^VPÊ/¼ö¿Ö5¼03õ8|I„ß¬1eC~èĞ¢Ë=“áúq¸Ex±)`™âl„Áë¶:uáÁ@ªåv£¼ŠAè‰Zû¢³›j£i£:€b!ˆ¥{®q”ÍõWİ6{ccô v
Şâ·f;Xã‡o¿K;Æ³/Ç¯×½îÍ!.ÌÒVº®¡{°;¾³WâéÕ+zËa„' . "\0" . 'x5;z•U´ußÏ¤ƒÆ/Ùà`A¼-‹3[Kü\'¨ì‚í³5:Ë‡…ûêkğ¦$Áoøƒ/hÊ2º”~øè+^µZ	MMu*·²ñı;`úœ…;YrJş“Z|¸u_…m#²ş6à%œüP< ·~ 	`àÇ~š|,»
wz¹ãüóüÌ©º»C§p¤÷ÂPùêDbÚÀÜ)œq?¬¿“	ï¥MDÌo¾ÒÊğœşzZ\'8ãC,Jâƒm~¯ÓÆX“»åG¬Ã7öÏÿ¸z¤ÌÇçÓ\\»›kÃÇL‰wË:&ºõhå£©åÿÇêX~ôlš›·Ëşß:0¿$Ê©ÔÕöÅ0rx[Eòú@÷hHgpÎş7|ŠP{–”' . "\0" . 'Bg¢œ†' . "\0" . '-' . "\0" . 'ÊŠ¶„œòù—É‹*;Knu	İÀÏ¡ºh°DÜ_|şåùÊÓ`dxıPK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'Ú‰M7mh
¶’' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.htmlUT	' . "\0" . 'ìàG¼àGUx' . "\0" . 'èd' . "\0" . '¼\\é“Û6–ÿÎ¿Ñx;££»ívlµİÇv×æpÙ¹j«¶ ’0&	†' . "\0" . '[VRùß÷' . "\0" . '	RT»É®?Ø	<<¼ã÷@~òåû"×ª¶Ú”O\'§ó“‰Pej2]nN·=šˆ//“\'Ÿ¼øñùÕ?_¿[^ÿôÕw¯‹Él±øûıç‹Å‹«âß^}ÿ' . "\0" . '
âª–¥Õ(Ê|±xùÃDL¶ÎUËÅb·ÛÍw÷ç¦Ş,®Ş,Ş#­Sœì?Î\\4s¹l+Ó‚ÀeiŸ9}üø1Ïà e.‘qUNDû	i(™Á?…rR ™ú¹Ñ×O\'ÏMéTéfWûJMDÊßNœzïHóB¤[Y[åzQ,•Rêéd£JUKgêhò“6NçVœÌ,…ç8óçÖ4uªÖÀºš—Ê-˜¤Ó.W—ê_@¥¨L	t–âïj•Éë©x¡¬Ş”S”ì“ìñ ·í1ğ_¦VâSg…,aŞ•YiiÅÛt›kç¶IoıÎø~‡GY·Ï•p /’ÔZf²ø<Y>£U—â…¼Ö™øÆ˜l£êd‰•)p¿á\'m,ØÖp×ÉWYŠ;üÏÙÉÉùìôlvúHœœ.Ï.Oˆ¿œœœˆ»oÜù#BJÃî‰;ÉòºÖh¯@ ûøàìì¾|nª}­7[àáj«­ MØ­RNlA+¥JQå2U™Ğ¥p[%ªf•ëTd¦ºœ\'Éµ–MîD*m*Ñ˜†`"°	šEÖnW5N˜µZ‡ùo•:Tûš´ßíbkvÎyÍ:æìœì©Ã{áL’6Ö™Bÿh÷Á<Ì“Ï¨ÂÍ`¨¨Ua®•XÎAÚb]›B8¹ÒB–°ÏBnà#Lšóxa§<"z"\\6öp+~M„§½\'â·$ù¨™Àç' . "\0" . '0µÎ@Ô2#â6\'<!ˆhLÄNÃ¤É\'Àqej\'K7™øs\'­¶$¬ª$¸²¤¢%R•ƒ¬q£"ŒCOæçªÀED÷1_ëÚº.t [©T¯Á.
YoÀRXUcòz<læLµY(—ÖMÅgÏl³"7¦uı´•q ì±™[e`²86Ó,w¿%@¾”sgÒÙJ¦ïjµ¦!è¦³L¥DCnAC/àMjrô×˜ş;œ»ÊMúîçÆ85W•ŞÔ²ÚFS‚ÈPl88Ë;=eÙ(ã$ãßÈ,‚' . "\0" . 'R' . "\0" . '\'â.šŸ·N²bäï“{h³ğ¥•É³Ùš|1Sk]ò‹\\ƒNœªÛ_—µ„™í{8€EÑ2}=—+$u£ùm0¦áU:uº8$}D*sÀà%Àdİ’Ê
Ã<O}wˆ¡í×¹ı’A4R533õ”Hluéøa«uşZ‚bø“ÓØÉºDËnî"rÏBeº)— hÑ›ÖN#´Œƒº/,
^{™ôx=:Ù?:v4òîĞÓµ,tÆo!E˜ATÑëv;AîGÙñª8ÊkçètRØÑÉA/G¶ä¯VÑ^>f‡ãP°HƒŞHæt*s@1ğ.tˆ¢”[40“¢I\'¼h?Í½ìß€IGğk¹ÚÈLÆÁ[“e4õ4ƒ—g`ã)ÁÛ8`ûl+eò¥ĞNbÔÿí€æmq!&Všº' . "\0" . 'i{bk½iêŞ>rµv³ú‡>K9ë¶6à6$0e¶É‚r%ºÛvCb' . "\0" . '–«æ åºT3ö~¼àG¹öÙ	*Œp"¢7B¾ñF(õ²Ncû°lW²>ÔéÇ¡…°¶©ÉŒ¼Ãıi¿ÎÜrÄ“?³êr#aN(.:	óƒwÕ¼nV5˜Ê¯7øé@/á@io*f$E”ˆÅV‹c0l{:ÄÑ½ôìvø? P|xyŠä2î/·§s«R‚Ä÷LÅölìáıÃ‡ÉöÁØÈó±‡ Éƒ–«nÄx€Gc:GFÕ]‚òkgh_œÿßêb3§)d×±/Ó÷Ş¶½_GŒÑä`‹E…›lÂÇ1ìõ
†á€ï+¯L¦JA^¨=LÁ Üì vÍ«­<H¯fü7Uul0½ê¦éPƒÈòe~QÌ”ÛÁúZ¯šúctÎÜƒ’ó“?óÜTVí¼ñ8' . "\0" . 'cÀÎµ³ÇÆß
ü•ÊÙ¶Ú©^;´<d#G"
ÑÎa>hy„]`ÿxFZÄF®›àê<ôH÷\\âã¨‡VV+H¥²‹ÈÑiÉNFr¨1X>=ñÖ' . "\0" . 'ä %°hgSÀ“¡t‡!îCáûH' . "\0" . 'Rôk(ç)$?JJÕ?JØøÌ*×?7cd ĞËuûø}ê rívïTv#•0ŞtntÄÒiXå Ş|Ø€©r®t$ÌÑQ<‡t¸Õ(ŒÎ' . "\0" . 'æÂ³ZÊÛçÛ‡Bqø~«óÈ±p÷!×n÷ÃAÔkÛš\\gâ´z/ UŞ&2ğ¢¥†£Ëµ9ˆ>ÚãùíXş’%&€Ù!ÕU7ğJåı™—Ğ´ém§ƒ-õñîø¼Â¯Ğí!<÷îÑ½5I@.ØûS[HŸUÍ°;y¸tøH¯oY´S¬½8b¯‡[áA8×r…ËàûıŞwÈSïÏßÆß£' . "\0" . 'ÓÃ¥á1r¨jØĞ0ÒÏ°eÛu‰,èé%|ğ}ğ•Éöğ$n‚Ğäé—Ew™=¨_fm#d‹}hÀlCÏNg\'ÔP?3É3\'·é]oO±ÓÍºvUTæD¬kêE_MDİä
^"û¸ì|0”Ï-ê‘—¾•íë¸UqM–' . "\0" . '¼š
)ºúò	XñÑKß×~²p[™]ŞØM‡aÙ%üU€jÛ¦îèbëúÎmçSŸ<šKMúÛN~×Øhú‹Z®{¬/œ·ˆ©§o^VPìFùU­î£hNƒÉåI&Mü)CûıÒ¹Ø\'	ËW@®iUÈ¹-.‘k¤ä×j­' . "\0" . 'ÛSĞù>?üÉ¦lp%†Eğãå[|ÅÄÈ)y³6€N×ZíÍ³æˆŸ‰0èöÔDihŞïhŞŸ\\^á«ÛS¢ª¥õ £õ' . "\0" . 'dÊ/‰Z“˜˜ú%e¯†Ğ{
DÏ;¢çàÑ¿¤ìÆoiĞíYm©#|©2äväFä¿âQ¿ƒ>b\'2¬ğE·ÂÑ
WaÜïX£’n»–©3õ>¬ò¨[åQ´Êkù5ŒÖY>n·æ{‰æ' . "\0" . '–µ¶ı¸[ëñäò%8âpğÙ¾çúü‰ñ:Z::4h\'7Â5½kñªü%ö)ñêÏcè%}Q#2DMIµ¦M¡VSt:C}(<3ïGk!»h‘¸­tšk¨1,¼q¾xö7Á¶9Å¨nÅÎÔïüéT]ŞüÛÔÂ' . "\0" . 'ñZhàÒ”ÉÙ„8RâQûÓ9UÎwú® è“t˜Œß¼üä’ÿÅ]#s 3(V°ªËW´Í´©1åÌ÷j*–%ŸÇÉÜØ%¬Úm\'Í5J§İ¶§õŸjíŒµv' . "\0" . 'cşpwğxÉ¼N¿R©l¬×¨‚ YkéöøuÕl6{>JÄN4ˆ²ĞØqouJ‘´;­Æ¼‚ŠG0˜wƒ´li-™é5iÊ‰R©ÌÎÅW
O²i<SPÕ‚\'GH' . "\0" . '§z¬áµÀìürY«2´X<àeq¶f{ŒK±nrPì‡È“Û¹VnM&„§¸‹zŸ8¼ùú¹ÀOdE$9-Áâû¢cøÍ•=g.• \'ë$êöK»‡r¯ÖêšÎ‡“xŒ[P3v5h`ğ>\'ßÁØ*,:º­@ö¦.ğĞe_+¨O-‰Á.‘7ĞV«•»8ËãMYkÈñ¨éx¯ÕĞ3ÈÂùêG¾ŸBä9ûræ`àH—àúÚ±H­^ıI«~ñRÂèŞî•ê5l¯4ät{‘Ë=ìŸl³òÎ "ûZëSj' . "\0" . '
R„‚(Ì¼aÇtü)²^ñGï&	#Xù3á#T"ìº,u`Ô=µ$XP‚c%¡¼jÏ¼†<{Ş2:«@µHM İg@ò™Ã‰S(Œt
ZIë÷‘)Ú*zºPmáÜ%İ@µà×)ˆ6˜Ôªª•Å>X&VûÎ"üf‰Û›œA£?@~PZÉo‚ÁKC‘è@ÀŞ¤J_«,9Á{+Ï6	nÓš\'zK…É4†£JÖvà,=\\: 5ëµÊ)”b U>g´ç¹ğ¹_^ÁØO\'Ñ|;ÄÚdãêaˆãPb,­¬†‡¹X3Ô™\\BŠt¹I‘ˆ6Œv¬)' . "\0" . 'Œ bVÿaÌQ90¤÷Ğo¡L*ä:#@íõãgy|%qœ)caõiNãÙéV¥ïXL$pta­ßµ³9tykÁ1M`QÉ{.^qÄÂ÷¬w)I\'%Øµ²Ş÷—Ó”d„&' . "\0" . 'FAaÎ„…’Ø2aP' . "\0" . 'U¨¢ÉÛ˜€I…¼–:ç’9^–OÁK@S]Ğ\\ƒÇ7µ²!‚û}Â²%^f"äp' . "\0" . 'ÆJ#vr?íENà#a	Ä¢ï»ÃX]Ò)•Îçe¥ ƒò`‰ªgã°k›*¬6ÍfKÔ½wók¹‘Ø>»Š8ózI‚¤ml‘Á&Z¿±´üø„ÇØpæ#×c®H×!ƒLü¢(@œÌ¢¢q¥Ä¯ô‡Bé†Ò¶ôó¥´ÿÚ«úP¬töÁ•ÎCßgPòŠÃÇã¥!,t=xßá¬IÂğVXúNnØ)ßÑYBg´†ºÁ±Q@C/1TFT>ÊmMnDDîÖTì7M‰×5("xOïÇ×Ú³jJWC*BI3Ñ
PÎB!~tÚYû³Â´a·¤»' . "\0" . '­KG¾Ô²ÏNY4' . "\0" . 's+µ„d`hö}¹@¸ûGä¼uúPå+ïÁœ`h‡É@Òç(Üe<' . "\0" . 'ÄgƒäëÀ+,s“ xEÌpĞFààrİ|(Fù„Ÿ­6MÑİ\\¿SOe*9ŸkÖë{=€l"è–á_ñ^­ï?Šaâ[/p\\€¦u w€#A=XÖ]Ğ h8ô†®*Q†Ã`·kG†‘‚ÒI™LÊLŸµjG’ê€ì^H{¤¥©Röa†ò¤$¦¡RåkáÍá0{
r~Û' . "\0" . 'Í.H­›2åŒóæÔ49x¢±˜ƒìiYÎ2|Q,8£@7˜ìšu2Lê±l€©¹‘Ùx2¶œeª' . "\0" . 'æ;§Ë;ãÂõ–5kß—ğUdrØ+ú¶ŸĞÑıD].ÀXc{vˆ6›IØh(H¼r ã^â0)A^B1µV6ÖN˜ãZª¬˜!»%q”§v¡‡ ›”¼Œ¨&k°8ˆ‡¶+IGâ^4à­XğãA"³H_xå»oú¥í~ê1pò‡­Şl1Ï«jm ªÛß*€~8¬=„µ¶!9ˆkáù‘¦¤lhb±-„ò´¨˜‰pÇrti›Alúşzv°I¼{Ğò¶E+€í¹6Š»cÅf¢²›í4£YÊOëã"Û:¤šj‡åx<4º{¯ëaBX¿ U_R<S`™íCîQ²¹mç7ñN•kÅ€âÙleÃæ%‚#
ç…}{ìI	MÑ÷¼(Cr \\$b' . "\0" . '‘nÙÁ8Ô¢Gg¶©Ğ‡’h©PÂxuNÅ²ªH·xít*@P#M6÷S ­÷|øî—i¬Çc­`]H•ÉJ»BÚwèz~šF(¼¬†Ñ?³Ülè)BV”°õëÖv²øN0Ñz2wùºqàÇ¿dD0ÑÙ·¼ã°”è:P]ëÒSúí€†¢º©0FXq­¥øöêêõìõOW^ÄÀ–ñÚÏIÀñòøCŠfÕ¥Ÿ‡F€>SØå%™Š[Ÿtç6èL²R‘X–gàå{È*£¬ª/nÖø²Oí¢q–›É\\§`Ë®)5—óX»ÏáĞ9NÄÄwt+Ge/&!…y˜vë%a“Ù•Ó#!9!¼ÃÅÑFÑuäÊ4´±ğÍ¿^½=˜ÄxÖñòmğ¹‹nz>ö”Ìd
¬‘B#¢Í¯~ÑÕjFMg(Ãš‹Œ‘çUÜİÄtŠ¸®$Û4¬]NúŒq$ÿĞœ‹Eæé“"„…~ÍL>Ê…c¡‘üÒ÷ÏONÅÆ%¯:]ù¡ŸKåô¿ÄÂèğl»7GĞBD•İÎºş|ß‹C\'
x¹#Ï' . "\0" . '™ô{J9qhËÃ›¨å[¡ó„BK q¡’ˆ&û—L.~,ÇŠ}à¶±;Q£sl÷ÅM¼†N—†¶,v=ZÃÁ·´á‡Cœšı]®øldù^[È^+V_YÅ’Èå@|àÈ õe8Ä{!ÈbÜ	ôyé†ZmfKqvºÖøÛ ?Ö€fè—µª,5)V&7Õe´;ì	v=µSÉC¸jkí$A*ÜñÚ5	™|(ØĞ°ñ•œï½‡ñşÀ$pMGm¿eFkƒèëÜcav8U _âù^tkÖÜªó;"&C²:Áş”Ë§æH‘J˜vWÓè¥ŠÛëvµ³š¨ËªòM–ÇĞÅ¦ÜéËØd\\VÇrLß»n·LÎÊ…¦lÅGÖô¹cæ½ô¸¥>êı^İñ×UÄ¡©ÓŠœ{ÙMıF¹Q’ôœ©FVõOZ0ß¼¼Š‘N	P"˜ë”4ãÌî§7¯¦¨ineñ?,¼Œ;à>ğxC$õ÷Hq¬¤ ƒvä¥P˜_j[a6¾k¹C»P¹%`nÇ5Oz*§“|ĞŸŒ‰Ë·,’ÀòNZO*ëÎÇ¦‚œzßR{‰/Ğk_¾è®%d€#»Ã®±ÿ®4;/œ¨—Î\'o,µ• @™VÛ\\GµGˆª Ê5 kTwSó§ÊbGà…êóîìg¦Ğ£Oínë*øpÔç¤œxÓøƒ2‚GƒŒ wÕeÄïn¸òÒö€ãÃµBQƒÁàqHÊ-/îúº Õî¤¨
ÿfØu°ÈU|(´Ñ×ønœîñÛwZ|ó,¬l“$áÀ@€r3ª¯MŞt=½Ú780AH3Vã¶"+‹·Ôu€¶‰¿†¹¶c>hÁÆv5Şw [d^…¬*d.Ó8ÑÔş\\)>Cö¦Şk©–%ÖpZ™¯ËÆ©C\'b, Ä"ª1ÚMz@\\
!HeáÌ‚—WÛª}DØ0½Ö?M;Û
°òCß’Ö~x}%Ñey™Øu´bã&c' . "\0" . 'ßNÿ^Ä˜¥¨¾a0º3ş9üp7HbÑ²ÛlûxìÇïõ­O®ù®Mp@½ûo	BÀ ¬„R]¯Ï"DØğHqÁ‡`9·0,Õp]¶R^ˆ°ËÁué]ÛÁCåEá™ì9l	²âµÆ¶çAUSƒÃ¨0ı§Ç_=>õ®Åy\\ŠŸ\\‹‹®¬ÁÌÍşÇ€RWäèvËJ<{ıŠÎhçFƒkhPz\'ñá‘×sİ^eîıœ6ˆ–ñiî.¾ÓIèÛOé)Uøƒ#²»÷.xÔb!ü¡åŠ\\0’Çv7œ@ô…ëE²@ş/5ûtã.Â´Á²¾Áù5P¾+>#şL ÀÀ]\'"–¶øÙf™‡]kÏxàßÿ·ªjûùh' . "\0" . 'nto…' . "\0" . '‘[Ä’o·Ğ' . "\0" . '¦hŒ¡ƒõ½çpoæ`«Ùaÿ.ÿşPsçñîáŞ´Ïî~¯ÓÚX³vóÏY†ÿmÿò×÷ôgÓ!}:™å8>ÖæŸU·C¦û‹·ÃZ&ÚñŸÑÈ{‡šÿ?Çüó¯A§kó~şùÿ·Ì/' . "\0" . '‡òP=j“ñÁ0èràÆ5^wÿd6ßltşo=âÿœ²L
€“¥¨‚ÁÿrüFS@|øâñÿË5/ÅŠ«,3Ø' . "\0" . '\'•y¶ SDJÊmÍ-tu1
@}ØâzĞÚ@;.' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'î‰M7%““şŞ' . "\0" . '' . "\0" . '½6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '¤' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT' . "\0" . 'áGUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'Ú‰M7mh
¶’' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '¤' . "\0" . '' . "\0" . 'put_test.htmlUT' . "\0" . 'ìàGUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'ï(' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '
',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '10645',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_CONTENT_LENGTH' => '10645',
        'CONTENT_TYPE' => 'application/octet-stream',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/put_test.zip", qop=, nc=00000001, cnonce="004aa0e3", response="49290e77b8af16426c633b560a445dda"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/put_test.zip',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/put_test.zip", qop=, nc=00000001, cnonce="004aa0e3", response="49290e77b8af16426c633b560a445dda"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'ef383241769f0df9a982a37b53504cf2',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  115 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/", qop=, nc=00000001, cnonce="004aa0e3", response="5b959bfb6f9b9ac149748dbe55572010"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/", qop=, nc=00000001, cnonce="004aa0e3", response="5b959bfb6f9b9ac149748dbe55572010"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>082f894be3770c1d4a37d15032a3b493</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>5ad59a93c1eb407447585fc830b848a7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>ef383241769f0df9a982a37b53504cf2</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  116 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="004aa0e3", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="004aa0e3", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>502bbb712c359f4a1c4699d4b5c9ff27</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>cf5657d4ea808c2f8b300e5b148df562</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>22789e94da0ed3d0c1d084816e366220</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>082f894be3770c1d4a37d15032a3b493</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  117 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_non_utf8.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_non_utf8.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_non_utf8.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_non_utf8.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_non_utf8.txt", qop=, nc=00000001, cnonce="004aa0e3", response="a666ca3b0b407358c3aaa58c10045b1c"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_non_utf8.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_non_utf8.txt", qop=, nc=00000001, cnonce="004aa0e3", response="a666ca3b0b407358c3aaa58c10045b1c"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'This is an UTF-8 test file
==========================

This file contains a variaty of Unicode characters to test with the eZ Webdav
component.

Greek letters
-------------

Î‘ Î’ Î“ Î” Î• Î– Î— Î˜ Î™ Îš Î› Îœ Î Î ÎŸ Î  Î¡ Î£ Î¤ Î¥ Î¦ Î§ Î¨ Î© 

Î± Î² Î³ Î´ Îµ Î¶ Î· Î¸ Î¹ Îº Î» Î¼ Î½ Î¾ Î¿ Ï€ Ï Ïƒ Ï„ Ï… Ï• Ï‡ Ïˆ Ï‰

Mathematical characters
-----------------------

â„‚ â„• â„š â„ â„¤ âˆ€ âˆ âˆ‚ âˆƒ âˆ„ âˆ… âˆˆ âˆ‰ âˆ‹ âˆŒ âˆ âˆ âˆ âˆ âˆ‘ + âˆ’ âˆ“ âˆ• âˆ– âˆ— âˆ˜ âˆš âˆ› âˆœ âˆ âˆ âˆ£ âˆ¤ âˆ§ âˆ¨ âˆ© âˆª âˆ«
âˆ¬ âˆ­ = â‰” â‰• â‰™ â‰ â‰  â‰¡ â‰¢ < > â‰¤ â‰¥ â‰ª â‰« â‰® â‰¯ â‰° â‰± â‰º â‰» â‰¼ â‰½ âŠ€ âŠ âŠ‚ âŠƒ âŠ„ âŠ… âŠ† âŠ‡ âŠˆ âŠ‰ âŠ• âŠ– âŠ— âŠ™ âŠš
âŠ› âŠœ âŠ âŠ¢ âŠ£ âŠ¤ âŠ¥ âŠ§ âŠ¬ âŠ¶ âŠ· âŠ» âŠ¼ âŠ½ â€° â€± 

',
      'headers' => 
      array (
        'ETag' => 'cf5657d4ea808c2f8b300e5b148df562',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  118 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/", qop=, nc=00000001, cnonce="004aa0e3", response="5b959bfb6f9b9ac149748dbe55572010"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/", qop=, nc=00000001, cnonce="004aa0e3", response="5b959bfb6f9b9ac149748dbe55572010"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>082f894be3770c1d4a37d15032a3b493</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>5ad59a93c1eb407447585fc830b848a7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>ef383241769f0df9a982a37b53504cf2</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  119 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_renamed.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_renamed.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_renamed.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_renamed.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_renamed.xml", qop=, nc=00000001, cnonce="004aa0e3", response="740c415b143cf8bf6bef040871e9afb9"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_renamed.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_renamed.xml", qop=, nc=00000001, cnonce="004aa0e3", response="740c415b143cf8bf6bef040871e9afb9"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="generator" content="Docutils 0.4: http://docutils.sourceforge.net/" /><title>eZ component: Webdav, Design, 1.0</title><meta name="author" content="Kore Nordmann, Tobias Schlitt" /><meta name="date" content="$Date$" /><style type="text/css">

/*
:Author: David Goodger
:Contact: goodger@users.sourceforge.net
:Date: $Date: 2005-12-18 01:56:14 +0100 (Sun, 18 Dec 2005) $
:Revision: $Revision: 4224 $
:Copyright: This stylesheet has been placed in the public domain.

Default cascading style sheet for the HTML output of Docutils.

See http://docutils.sf.net/docs/howto/html-stylesheets.html for how to
customize this style sheet.
*/

/* used to remove borders from tables and images */
.borderless, table.borderless td, table.borderless th {
  border: 0 }

table.borderless td, table.borderless th {
  /* Override padding for "table.docutils td" with "! important".
     The right padding separates the table cells. */
  padding: 0 0.5em 0 0 ! important }

.first {
  /* Override more specific margin styles with "! important". */
  margin-top: 0 ! important }

.last, .with-subtitle {
  margin-bottom: 0 ! important }

.hidden {
  display: none }

a.toc-backref {
  text-decoration: none ;
  color: black }

blockquote.epigraph {
  margin: 2em 5em ; }

dl.docutils dd {
  margin-bottom: 0.5em }

/* Uncomment (and remove this text!) to get bold-faced definition list terms
dl.docutils dt {
  font-weight: bold }
*/

div.abstract {
  margin: 2em 5em }

div.abstract p.topic-title {
  font-weight: bold ;
  text-align: center }

div.admonition, div.attention, div.caution, div.danger, div.error,
div.hint, div.important, div.note, div.tip, div.warning {
  margin: 2em ;
  border: medium outset ;
  padding: 1em }

div.admonition p.admonition-title, div.hint p.admonition-title,
div.important p.admonition-title, div.note p.admonition-title,
div.tip p.admonition-title {
  font-weight: bold ;
  font-family: sans-serif }

div.attention p.admonition-title, div.caution p.admonition-title,
div.danger p.admonition-title, div.error p.admonition-title,
div.warning p.admonition-title {
  color: red ;
  font-weight: bold ;
  font-family: sans-serif }

/* Uncomment (and remove this text!) to get reduced vertical space in
   compound paragraphs.
div.compound .compound-first, div.compound .compound-middle {
  margin-bottom: 0.5em }

div.compound .compound-last, div.compound .compound-middle {
  margin-top: 0.5em }
*/

div.dedication {
  margin: 2em 5em ;
  text-align: center ;
  font-style: italic }

div.dedication p.topic-title {
  font-weight: bold ;
  font-style: normal }

div.figure {
  margin-left: 2em ;
  margin-right: 2em }

div.footer, div.header {
  clear: both;
  font-size: smaller }

div.line-block {
  display: block ;
  margin-top: 1em ;
  margin-bottom: 1em }

div.line-block div.line-block {
  margin-top: 0 ;
  margin-bottom: 0 ;
  margin-left: 1.5em }

div.sidebar {
  margin-left: 1em ;
  border: medium outset ;
  padding: 1em ;
  background-color: #ffffee ;
  width: 40% ;
  float: right ;
  clear: right }

div.sidebar p.rubric {
  font-family: sans-serif ;
  font-size: medium }

div.system-messages {
  margin: 5em }

div.system-messages h1 {
  color: red }

div.system-message {
  border: medium outset ;
  padding: 1em }

div.system-message p.system-message-title {
  color: red ;
  font-weight: bold }

div.topic {
  margin: 2em }

h1.section-subtitle, h2.section-subtitle, h3.section-subtitle,
h4.section-subtitle, h5.section-subtitle, h6.section-subtitle {
  margin-top: 0.4em }

h1.title {
  text-align: center }

h2.subtitle {
  text-align: center }

hr.docutils {
  width: 75% }

img.align-left {
  clear: left }

img.align-right {
  clear: right }

ol.simple, ul.simple {
  margin-bottom: 1em }

ol.arabic {
  list-style: decimal }

ol.loweralpha {
  list-style: lower-alpha }

ol.upperalpha {
  list-style: upper-alpha }

ol.lowerroman {
  list-style: lower-roman }

ol.upperroman {
  list-style: upper-roman }

p.attribution {
  text-align: right ;
  margin-left: 50% }

p.caption {
  font-style: italic }

p.credits {
  font-style: italic ;
  font-size: smaller }

p.label {
  white-space: nowrap }

p.rubric {
  font-weight: bold ;
  font-size: larger ;
  color: maroon ;
  text-align: center }

p.sidebar-title {
  font-family: sans-serif ;
  font-weight: bold ;
  font-size: larger }

p.sidebar-subtitle {
  font-family: sans-serif ;
  font-weight: bold }

p.topic-title {
  font-weight: bold }

pre.address {
  margin-bottom: 0 ;
  margin-top: 0 ;
  font-family: serif ;
  font-size: 100% }

pre.literal-block, pre.doctest-block {
  margin-left: 2em ;
  margin-right: 2em ;
  background-color: #eeeeee }

span.classifier {
  font-family: sans-serif ;
  font-style: oblique }

span.classifier-delimiter {
  font-family: sans-serif ;
  font-weight: bold }

span.interpreted {
  font-family: sans-serif }

span.option {
  white-space: nowrap }

span.pre {
  white-space: pre }

span.problematic {
  color: red }

span.section-subtitle {
  /* font-size relative to parent (h1..h6 element) */
  font-size: 80% }

table.citation {
  border-left: solid 1px gray;
  margin-left: 1px }

table.docinfo {
  margin: 2em 4em }

table.docutils {
  margin-top: 0.5em ;
  margin-bottom: 0.5em }

table.footnote {
  border-left: solid 1px black;
  margin-left: 1px }

table.docutils td, table.docutils th,
table.docinfo td, table.docinfo th {
  padding-left: 0.5em ;
  padding-right: 0.5em ;
  vertical-align: top }

table.docutils th.field-name, table.docinfo th.docinfo-name {
  font-weight: bold ;
  text-align: left ;
  white-space: nowrap ;
  padding-left: 0 }

h1 tt.docutils, h2 tt.docutils, h3 tt.docutils,
h4 tt.docutils, h5 tt.docutils, h6 tt.docutils {
  font-size: 100% }

tt.docutils {
  background-color: #eeeeee }

ul.auto-toc {
  list-style-type: none }

</style></head><body><div class="document" id="ez-component-webdav-design-1-0"><h1 class="title">eZ component: Webdav, Design, 1.0</h1><table class="docinfo" frame="void" rules="none"><col class="docinfo-name" /><col class="docinfo-content" /><tbody valign="top"><tr><th class="docinfo-name">Author:</th><td>Kore Nordmann, Tobias Schlitt</td></tr><tr><th class="docinfo-name">Revision:</th><td>$Rev$</td></tr><tr><th class="docinfo-name">Date:</th><td>$Date$</td></tr><tr><th class="docinfo-name">Status:</th><td>Draft</td></tr></tbody></table><div class="contents topic"><p class="topic-title first"><a id="contents" name="contents">Contents</a></p><ul class="simple"><li><a class="reference" href="#scope" id="id1" name="id1">Scope</a></li><li><a class="reference" href="#design-overview" id="id2" name="id2">Design overview</a></li><li><a class="reference" href="#tiers" id="id3" name="id3">Tiers</a></li><li><a class="reference" href="#classes" id="id4" name="id4">Classes</a><ul><li><a class="reference" href="#ezcwebdavserver" id="id5" name="id5">ezcWebdavServer</a></li><li><a class="reference" href="#ezcwebdavbackend" id="id6" name="id6">ezcWebdavBackend</a></li><li><a class="reference" href="#ezcwebdavtransport" id="id7" name="id7">ezcWebdavTransport</a></li><li><a class="reference" href="#ezcwebdavpathfactory" id="id8" name="id8">ezcWebdavPathFactory</a></li></ul></li><li><a class="reference" href="#example-code" id="id9" name="id9">Example code</a></li></ul></div><div class="section"><h1><a class="toc-backref" href="#id1" id="scope" name="scope">Scope</a></h1><p>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> protocol.</p><p>It is currently not planned to also offer a WebDAV client component.</p></div><div class="section"><h1><a class="toc-backref" href="#id2" id="design-overview" name="design-overview">Design overview</a></h1><p>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</p><p>The main class of this component will provide a fully <a class="reference" href="http://tools.ietf.org/html/rfc2518">RFC 2518</a> compliant
implementation of a <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</p><p>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</p></div><div class="section"><h1><a class="toc-backref" href="#id3" id="tiers" name="tiers">Tiers</a></h1><p>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</p><p>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</p><p>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</p><p>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</p></div><div class="section"><h1><a class="toc-backref" href="#id4" id="classes" name="classes">Classes</a></h1><div class="section"><h2><a class="toc-backref" href="#id5" id="ezcwebdavserver" name="ezcwebdavserver">ezcWebdavServer</a></h2><p>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</p><p>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</p><p>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</p><p>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</p><p>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</p><p>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</p><p>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</p></div><div class="section"><h2><a class="toc-backref" href="#id6" id="ezcwebdavbackend" name="ezcwebdavbackend">ezcWebdavBackend</a></h2><p>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</p><ul class="simple"><li>head()</li><li>get()</li><li>propFind()</li><li>propFetch()</li></ul><p>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</p><p>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</p><p>The logical groups of capabilities are:</p><dl class="docutils"><dt>Put</dt><dd>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</dd><dt>Change</dt><dd>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</dd><dt>Make collection</dt><dd>The creation of new collections also makes up a capability unit and can
optionally be implemented.</dd><dt>Lock</dt><dd>If the hander provides locking facilities on its own, the main server object
must not take care about that.</dd><dt>GZIP-Compress</dt><dd>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</dd></dl><p>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</p></div><div class="section"><h2><a class="toc-backref" href="#id7" id="ezcwebdavtransport" name="ezcwebdavtransport">ezcWebdavTransport</a></h2><p>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</p><p>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</p><p>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</p><p>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</p><p>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</p><p>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</p><p>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</p><p>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</p></div><div class="section"><h2><a class="toc-backref" href="#id8" id="ezcwebdavpathfactory" name="ezcwebdavpathfactory">ezcWebdavPathFactory</a></h2><p>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</p><p>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</p><p>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</p><p>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</p><p>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</p><p>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</p></div></div><div class="section"><h1><a class="toc-backref" href="#id9" id="example-code" name="example-code">Example code</a></h1><p>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</p><pre class="literal-block">
    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();
</pre><!-- Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79 --></div></div></body></html>

',
      'headers' => 
      array (
        'ETag' => '502bbb712c359f4a1c4699d4b5c9ff27',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  120 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt", qop=, nc=00000001, cnonce="004aa0e3", response="97c5298aa7988aea80f92643a2ec8b5a"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt", qop=, nc=00000001, cnonce="004aa0e3", response="97c5298aa7988aea80f92643a2ec8b5a"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'This is an UTF-8 test file
==========================

This file contains a variaty of Unicode characters to test with the eZ Webdav
component.

Greek letters
-------------

Î‘ Î’ Î“ Î” Î• Î– Î— Î˜ Î™ Îš Î› Îœ Î Î ÎŸ Î  Î¡ Î£ Î¤ Î¥ Î¦ Î§ Î¨ Î© 

Î± Î² Î³ Î´ Îµ Î¶ Î· Î¸ Î¹ Îº Î» Î¼ Î½ Î¾ Î¿ Ï€ Ï Ïƒ Ï„ Ï… Ï• Ï‡ Ïˆ Ï‰

Mathematical characters
-----------------------

â„‚ â„• â„š â„ â„¤ âˆ€ âˆ âˆ‚ âˆƒ âˆ„ âˆ… âˆˆ âˆ‰ âˆ‹ âˆŒ âˆ âˆ âˆ âˆ âˆ‘ + âˆ’ âˆ“ âˆ• âˆ– âˆ— âˆ˜ âˆš âˆ› âˆœ âˆ âˆ âˆ£ âˆ¤ âˆ§ âˆ¨ âˆ© âˆª âˆ«
âˆ¬ âˆ­ = â‰” â‰• â‰™ â‰ â‰  â‰¡ â‰¢ < > â‰¤ â‰¥ â‰ª â‰« â‰® â‰¯ â‰° â‰± â‰º â‰» â‰¼ â‰½ âŠ€ âŠ âŠ‚ âŠƒ âŠ„ âŠ… âŠ† âŠ‡ âŠˆ âŠ‰ âŠ• âŠ– âŠ— âŠ™ âŠš
âŠ› âŠœ âŠ âŠ¢ âŠ£ âŠ¤ âŠ¥ âŠ§ âŠ¬ âŠ¶ âŠ· âŠ» âŠ¼ âŠ½ â€° â€± 

',
      'headers' => 
      array (
        'ETag' => '22789e94da0ed3d0c1d084816e366220',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  121 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/put_test.xml", qop=, nc=00000001, cnonce="004aa0e3", response="016c3ac3e9c40e4227817d1b249ee653"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/put_test.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/put_test.xml", qop=, nc=00000001, cnonce="004aa0e3", response="016c3ac3e9c40e4227817d1b249ee653"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?><!DOCTYPE document PUBLIC "+//IDN docutils.sourceforge.net//DTD Docutils Generic//EN//XML" "http://docutils.sourceforge.net/docs/ref/docutils.dtd"><!-- Generated by Docutils 0.4 --><document ids="ez-component-webdav-design-1-0" names="ez\\ component:\\ webdav,\\ design,\\ 1.0" source="Webdav/design/design.txt" title="eZ component: Webdav, Design, 1.0"><title>eZ component: Webdav, Design, 1.0</title><docinfo><author>Kore Nordmann, Tobias Schlitt</author><revision>$Rev$</revision><date>$Date$</date><status>Draft</status></docinfo><topic classes="contents" ids="contents" names="contents"><title>Contents</title><bullet_list><list_item><paragraph><reference ids="id1" refid="scope">Scope</reference></paragraph></list_item><list_item><paragraph><reference ids="id2" refid="design-overview">Design overview</reference></paragraph></list_item><list_item><paragraph><reference ids="id3" refid="tiers">Tiers</reference></paragraph></list_item><list_item><paragraph><reference ids="id4" refid="classes">Classes</reference></paragraph><bullet_list><list_item><paragraph><reference ids="id5" refid="ezcwebdavserver">ezcWebdavServer</reference></paragraph></list_item><list_item><paragraph><reference ids="id6" refid="ezcwebdavbackend">ezcWebdavBackend</reference></paragraph></list_item><list_item><paragraph><reference ids="id7" refid="ezcwebdavtransport">ezcWebdavTransport</reference></paragraph></list_item><list_item><paragraph><reference ids="id8" refid="ezcwebdavpathfactory">ezcWebdavPathFactory</reference></paragraph></list_item></bullet_list></list_item><list_item><paragraph><reference ids="id9" refid="example-code">Example code</reference></paragraph></list_item></bullet_list></topic><section ids="scope" names="scope"><title refid="id1">Scope</title><paragraph>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> protocol.</paragraph><target ids="webdav" names="webdav" refuri="http://en.wikipedia.org/wiki/WebDAV"/><paragraph>It is currently not planned to also offer a WebDAV client component.</paragraph></section><section ids="design-overview" names="design\\ overview"><title refid="id2">Design overview</title><paragraph>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</paragraph><paragraph>The main class of this component will provide a fully <reference name="RFC 2518" refuri="http://tools.ietf.org/html/rfc2518">RFC 2518</reference> compliant
implementation of a <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</paragraph><target ids="rfc-2518" names="rfc\\ 2518" refuri="http://tools.ietf.org/html/rfc2518"/><paragraph>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</paragraph></section><section ids="tiers" names="tiers"><title refid="id3">Tiers</title><paragraph>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</paragraph><paragraph>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</paragraph><paragraph>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</paragraph><paragraph>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</paragraph></section><section ids="classes" names="classes"><title refid="id4">Classes</title><section ids="ezcwebdavserver" names="ezcwebdavserver"><title refid="id5">ezcWebdavServer</title><paragraph>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</paragraph><paragraph>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</paragraph><paragraph>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</paragraph><paragraph>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</paragraph><paragraph>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</paragraph><paragraph>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</paragraph><paragraph>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</paragraph></section><section ids="ezcwebdavbackend" names="ezcwebdavbackend"><title refid="id6">ezcWebdavBackend</title><paragraph>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</paragraph><bullet_list bullet="-"><list_item><paragraph>head()</paragraph></list_item><list_item><paragraph>get()</paragraph></list_item><list_item><paragraph>propFind()</paragraph></list_item><list_item><paragraph>propFetch()</paragraph></list_item></bullet_list><paragraph>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</paragraph><paragraph>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</paragraph><paragraph>The logical groups of capabilities are:</paragraph><definition_list><definition_list_item><term>Put</term><definition><paragraph>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</paragraph></definition></definition_list_item><definition_list_item><term>Change</term><definition><paragraph>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</paragraph></definition></definition_list_item><definition_list_item><term>Make collection</term><definition><paragraph>The creation of new collections also makes up a capability unit and can
optionally be implemented.</paragraph></definition></definition_list_item><definition_list_item><term>Lock</term><definition><paragraph>If the hander provides locking facilities on its own, the main server object
must not take care about that.</paragraph></definition></definition_list_item><definition_list_item><term>GZIP-Compress</term><definition><paragraph>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</paragraph></definition></definition_list_item></definition_list><paragraph>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</paragraph></section><section ids="ezcwebdavtransport" names="ezcwebdavtransport"><title refid="id7">ezcWebdavTransport</title><paragraph>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</paragraph><paragraph>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</paragraph><paragraph>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</paragraph><paragraph>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</paragraph><paragraph>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</paragraph><paragraph>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</paragraph><paragraph>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</paragraph><paragraph>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</paragraph></section><section ids="ezcwebdavpathfactory" names="ezcwebdavpathfactory"><title refid="id8">ezcWebdavPathFactory</title><paragraph>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</paragraph><paragraph>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</paragraph><paragraph>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</paragraph><paragraph>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</paragraph></section></section><section ids="example-code" names="example\\ code"><title refid="id9">Example code</title><paragraph>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</paragraph><literal_block xml:space="preserve">    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();</literal_block><comment xml:space="preserve">Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79</comment></section></document>
',
      'headers' => 
      array (
        'ETag' => '5ad59a93c1eb407447585fc830b848a7',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  122 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/put_test.zip", qop=, nc=00000001, cnonce="004aa0e3", response="af93c110e7782114f3ed460b550f88c2"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/put_test.zip',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/collection/put_test.zip", qop=, nc=00000001, cnonce="004aa0e3", response="af93c110e7782114f3ed460b550f88c2"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'î‰M7%““şŞ' . "\0" . '' . "\0" . '½6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT	' . "\0" . 'áGáGUx' . "\0" . 'èd' . "\0" . '½[isÛ6şÎ_Õtš¤«£IÛmëÚê$qÒf¶‡\'u÷šÌt ”P“—' . "\0" . '­¨¿~ß ARrãnvû!–(' . "\0" . 'ïı¼Øó¯ß–…¸UÕ¦º˜=^~<ªJM¦«íÅ¬uùâ‹Ù×ëäüO—?>¿şçÕ‘™´-UåÄÕÏÏ¾{õ\\Ìş¼Z½ºü;]Ø¥5m“ªÜ4[µ¬”[­.¯/Å¥ÿU|£*ÕètµzñÃjõï¿›‰ÙÎ¹úlµ:y' . "\0" . 'ü`WÊû™ËfÈÓbÁçI§2±9ôT>^~*XÒq«3{1S¿-RSÖ¦‚\'‹½Údòv‘)«·Õâñ¯d©hÙÑ­;{#xåüàµğÔÄ|^ÌşN?¯øGÿgéŞº™pÚ°@ı+:Nğò¹¸äÃè¬õ9-]ÿîÊó/DÁt•›õ¹lİÎ4ë¿šF‰L“•²‚¥×f£¥?¥»B;w¾ò«Îu«ÑÒë^«ÛÎWİ÷ó”¸şàş…ÇôåÜ:éZ»¾ldGøoç«´3µNEZHkQm©©ğmg¬ìş«Wk÷ HûÜ?è„Ú´E¡Ü/…¶n}ÿş¢*×çµlä¶‘õÈUª˜ˆÎÏ<ÓÙÅÌ¦¦V³õOø%óãhÿ*:ö)<é(x_1.·Zígk¶ŒŞ\'ÕO:ªNCtÎÖ×øç}Rø´£àM8[?ç\'©ü}Ö‘Q¿¥JÔ¥šÙ°ÿDŞ§p™RİÈôFUYDö?yŸt?ŸÒu¬lmQ¾ÏŞ\'í/¦´kév¹Liõ+xú’Ÿ¾ıÕÀî€³/{ÎŞÊ².àp±ú‚¿	üöG8! R©cjt<(0â&5Nxèéé]ï” ]ÂäÂí´íS|v³@Úè‚AÀJ;-Ÿp‹ì!<q;éDİ˜[¿Ã/ şË§ìÿs±ßét\'ö¦¹±b¯İNÈ¢¥üÕ4ÂÀáĞ¨$-Q>›GJD
F1)Á¹¤ä¶Ñ!¥ªj¹×7ºV™–KÈ§+ü¶ò‹×ü7V;²êLjŠåÀ' . "\0" . 'NB*ö)”İªSoøzÂ«XÛ¯H«iÛ' . "\0" . '®8ˆÊ€Â
ÈaÑA×²°”
öÚKÆè´<dvåaäcèğó7¢Çô±«<9ó§y¦RÙZï2JÜÊFKwÀ¯›v»=Yeà*È2x¯Û×±psò¸¤“Ü\\Â{œ"äÆ°` ÛB\\ÉLçdF\'*¥2»Ï€éL‘ÎãÀ‡S€‚Âp«F¦~íÉeCÅ#¤”ºâÔß…É)¦E1{˜:íë—ÏÅ“Ï1ñgyZ¹œ|gçÊbÕä)­]‡]¿%Åj	7Ô,Çãÿ,\\8—â)8YõRè´Aºi”k´ºÅà¯’x;ğ‰üš,pòÖ¦Š9(€E†2M	µ8ªQÿn•…b7xj‚ï€i;>Ä]ciK®e°§|t:¨A¹¶„
xğæş¶öÓ,ÓÈ @ÚaN À£øŠ#ˆ­+@;íˆãÈ³¼C&CŠVT¬ìØİĞ@7¥ïAò' . "\0" . 'J¦h©}x&èCCGbqj' . "\0" . 'R„#Bepjj-±Äşğß­q_QPóG¸	£ÄİSá®' . "\0" . '. Òª©I˜lŸ@¥nJX˜¢âØP_‚gŞ<{Şız×CÛKïŠ\\Y£û:sŒŸt¥çÑTÙG=Xd#­g<S$‚Ÿ:ûLà´~ƒ@¢¤Qu£,À=\\ç^:2ò]!¦1Ê –ª¬Ş€w µÕƒF%ü’*}\'ûĞ¡œÒ)°«ÌB0vşˆ1XK<ˆÀv‚wAãäTQ' . "\0" . 'T=`m¡ ÊHKánEÂ§lD"!ÏÈá?%d&„™E½edÇò¡Q@M¢9*„r9TÊÖ7Ê¤:›F;¶‘Z8Äl~İ,ÑV°dğĞ‹P%5rê„$âÍåwŸPÏ3‰Û0{UIÌãÃÒJoXkdŒh­(ãhg!µé&ó¾„kÚÀ"¡×ıR¼â”lá%é‹²¢H*ğkes’9®µ9©' . "\0" . 'Š”ò°	„’ØoaQ@\\¨²-º¬„u¼•º@\'’E‹‚¡z¨’>«ç' . "\0" . '' . "\0" . 'm£l(1¼œ@ĞÔŠ+€±Êˆ½<Ì©øHX±ê‡Êî!WW„1ÒùÊ´ªiLSİ@}#/Ìí×˜v»#b
øg¹…@gT™-	Š·±¿é‚ôˆÆØá×\'¼¾¤ÜŠk°~º=¨4ù
*òDÑ' . "\0" . 'O™E»#¥ÄSºĞ†»…„†{¶ŸF=¸‡ÛÁAãºYZëñÁŸé¶âùhU²îHÕI"·
ÜµH1	›¡#ÇBéƒhœ²P¹QT*·3‹£©­9,Úªğ£tày˜\\gcfÕT®ÂƒJw:+à8k‹øÑéIg~Zš.çV¹Ş¶MÀQätÒp–-€ÚFA%0öê¡‡B€p‹y<Î;ŸO[¾åññÊÕ…vX	$CÊİ4pÃ°òš8½en„ªˆÎ8ãtğÄµk„1}¹g§MÛ$\'Tô°Ğ7J&½ÁS)¶\\›çî‚“‘LÁò¤gH}ø‹n•wƒñ„ç[¯¤GÛz„› F°Î' . "\0" . '“uŸ1(3Ayƒ³LMÅ#=0£Gnéc˜2Uµ½¾‚Õü;TñÖ½ÎzöÈ\\JÓ Àç*¡’øtÈ“ªÈ…÷iauBí?µ@¢OXy[¥\\ÌcIš¶€°5Ë“qÁˆïÙ\'fÔïë`“\'ãzÛØZ™/ûBtW‹L• ËÉ-zODòSïf{‡Üm|œLrß+Á' . "\0" . '´òÒ—	ŒS\'µG#$ğ÷L‚"¤A­"˜v8Ã:‘ ,“z&”}µS`g‡µ²¥¾ù³;2FIõnŸ•(/0SDƒGÁ©IîÉÉ2âĞöíó‘”ƒÔIo©UŠC°Q£#³È¸°¿?~¶d¤Œ¹ÏAPxìôv‡bİhİááRídÜ;I‘İxœ#ÿrl4<I’èq#D²üòæ¨)Š@Êr¢êæ0ˆW<ê\\b¶_å](€¸ÇŠ\'‰”“¢¡' . "\0" . '»mF»”ß6Qö-IÍ*4g§fı‚?_Ì³#ß’ÙÃG÷`CŠ¿ï€Èú%`÷Ú§ DîØ8-íÍÓX¯óHÍÔ×ŒŒ^£Ùõå¤@[ã¾`"CÀ&ƒb˜øŠ·ú¨J&~ˆ‡ÜFGwì`ºíp¯wXÛÖîID*ôeŞóæ‚RvİB|¦@h¨ò$ ÷…–ÅŸ' . "\0" . 'Åus eªXnìª¨<H6Ú•ÒŞ Jø=èÔ¡òª×<w ra¶8 [èHj*b‡­×8ÈH$÷‹Ñï; Ör}Õ:€ü­3' . "\0" . 'jìI:Áíœ{­~,Ø KzŠ*Áy^ÒÖ˜8­¸ÕR|{}}µ¸úùÚ›k„‘1#«ã¼ß!Ñs2÷ï	œÚvÓ·Ó0	I4S8ı725ÄK¨Ëã…Î$YzGJ–ÿRÂï¡_ˆ
äß·â|¯öÑ^Ë—Üeb¿Û¹…ÓHblÄbpíÆ{í;¨ï–\'šŒ`	Ú°PœPtPSQR2ûj~¢RK(ÑaëH¥DrcZG~ı^ûæ_¯®Ï!Ãb)t·„ß\\À ¥a/İ
éL&P¥…‡“¡6¿éú	åèŒ®c|İuIÆGƒF€4ĞQvDÇ¬ô½Î‘RYs†¯ßø‡£‚]pdP˜ÔúÉög??—¼ê½ÒÏ¹ı^šİ¯ë/À\'µXt7>®Æ>?~]>­ÇÂˆbbâş¢k¦a+E#÷ !ç%ÃQ(×m¸´ãäu4võ3ª0Rğ…YUëBmö?òùKñcul
Ü¶¶e|huCëxxŞX¤á6§s§XE=…ÅŠ<§·s°]‹l\\áfp#ä` ÍÍ”ÄŠPUÊ‘6\\À8ùUv¾içÙ¾IÚÒ@»ëº¨rÁs™ÏŸkBÚ—·Õª-ÚöÔ÷0°8èîWte@ÃÓcÉ$(‰Çˆ~.IJ İ Ï!¥MõæŒ~$á/”ÂzÕxBºë®8P£Ä
F±ƒxô¦7g@ª»~éb€çÏ^@â9‹áòÃß-û.O¤æ»rıbi°ä-
Bâª6º£`CúÙ«\'¬A-*·WªÏ$ÇU÷E Vó#%t @çyŠì´I®¬Q4‰æOƒÆ®;ı(rLá$»ı(:;…Nœõ\'}£ÜQ
ôœ‰œ' . "\0" . 'à÷Éğ:u2–üæÅu4Œ€ *ĞŞ¢®û~ıjnÁÓ^ì1#/w@>‡y¯%_Å¥ğL/Û /¥ÂfDÛ’¼¸õƒú=:‘*,A>€x‰¬Ü29åÜlğÍZ½xL{~n—–÷Òú£²şÂx.øv€İi/0w†óºa°Ÿ†ss	%şï¿{1¬’47•Ù{]E—K|3ÍúÁU;	ö”Ét¨Äã‚îŠ]•4‘	¸—h Úç!eñNŠÆPıUé<cp>]øX7T…«p¾U	!‰÷”ûÕño“jcğ6Ü¸ŞøâÔrG®IâËçRÑàÌà…`Ês_¾qAı{KB‘7¦$1ƒGnâkÑ­¾°£íûıÑß7Ñd' . "\0" . 'ÚX¸0L 2æF¦hûÁvcŒ]"à«Q¸Ó^KØÏ=\'R†›tbw³»ã´àcûßPjÚÂJY×Èk¦q£iüEkü…—w\\³ø ¶ác¢@”)†EI¯ql˜Å*êÓNÉìÑóL±ÂCWÎ¬˜“e½«»GÔ€¿&õãR1øáÄÑÿ4-È}' . "\0" . 'È`O	“ş²¦èñë`¨§şæ×kÌ†j§S*ÏáR÷Îâ€µWŠ–ã—€ŞEn]Ê­²cY‘d¹³^VPÊ/¼ö¿Ö5¼03õ8|I„ß¬1eC~èĞ¢Ë=“áúq¸Ex±)`™âl„Áë¶:uáÁ@ªåv£¼ŠAè‰Zû¢³›j£i£:€b!ˆ¥{®q”ÍõWİ6{ccô v
Şâ·f;Xã‡o¿K;Æ³/Ç¯×½îÍ!.ÌÒVº®¡{°;¾³WâéÕ+zËa„' . "\0" . 'x5;z•U´ußÏ¤ƒÆ/Ùà`A¼-‹3[Kü\'¨ì‚í³5:Ë‡…ûêkğ¦$Áoøƒ/hÊ2º”~øè+^µZ	MMu*·²ñı;`úœ…;YrJş“Z|¸u_…m#²ş6à%œüP< ·~ 	`àÇ~š|,»
wz¹ãüóüÌ©º»C§p¤÷ÂPùêDbÚÀÜ)œq?¬¿“	ï¥MDÌo¾ÒÊğœşzZ\'8ãC,Jâƒm~¯ÓÆX“»åG¬Ã7öÏÿ¸z¤ÌÇçÓ\\»›kÃÇL‰wË:&ºõhå£©åÿÇêX~ôlš›·Ëşß:0¿$Ê©ÔÕöÅ0rx[Eòú@÷hHgpÎş7|ŠP{–”' . "\0" . 'Bg¢œ†' . "\0" . '-' . "\0" . 'ÊŠ¶„œòù—É‹*;Knu	İÀÏ¡ºh°DÜ_|şåùÊÓ`dxıPK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'Ú‰M7mh
¶’' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.htmlUT	' . "\0" . 'ìàG¼àGUx' . "\0" . 'èd' . "\0" . '¼\\é“Û6–ÿÎ¿Ñx;££»ívlµİÇv×æpÙ¹j«¶ ’0&	†' . "\0" . '[VRùß÷' . "\0" . '	RT»É®?Ø	<<¼ã÷@~òåû"×ª¶Ú”O\'§ó“‰Pej2]nN·=šˆ//“\'Ÿ¼øñùÕ?_¿[^ÿôÕw¯‹Él±øûıç‹Å‹«âß^}ÿ' . "\0" . '
âª–¥Õ(Ê|±xùÃDL¶ÎUËÅb·ÛÍw÷ç¦Ş,®Ş,Ş#­Sœì?Î\\4s¹l+Ó‚ÀeiŸ9}üø1Ïà e.‘qUNDû	i(™Á?…rR ™ú¹Ñ×O\'ÏMéTéfWûJMDÊßNœzïHóB¤[Y[åzQ,•Rêéd£JUKgêhò“6NçVœÌ,…ç8óçÖ4uªÖÀºš—Ê-˜¤Ó.W—ê_@¥¨L	t–âïj•Éë©x¡¬Ş”S”ì“ìñ ·í1ğ_¦VâSg…,aŞ•YiiÅÛt›kç¶IoıÎø~‡GY·Ï•p /’ÔZf²ø<Y>£U—â…¼Ö™øÆ˜l£êd‰•)p¿á\'m,ØÖp×ÉWYŠ;üÏÙÉÉùìôlvúHœœ.Ï.Oˆ¿œœœˆ»oÜù#BJÃî‰;ÉòºÖh¯@ ûøàìì¾|nª}­7[àáj«­ MØ­RNlA+¥JQå2U™Ğ¥p[%ªf•ëTd¦ºœ\'Éµ–MîD*m*Ñ˜†`"°	šEÖnW5N˜µZ‡ùo•:Tûš´ßíbkvÎyÍ:æìœì©Ã{áL’6Ö™Bÿh÷Á<Ì“Ï¨ÂÍ`¨¨Ua®•XÎAÚb]›B8¹ÒB–°ÏBnà#Lšóxa§<"z"\\6öp+~M„§½\'â·$ù¨™Àç' . "\0" . '0µÎ@Ô2#â6\'<!ˆhLÄNÃ¤É\'Àqej\'K7™øs\'­¶$¬ª$¸²¤¢%R•ƒ¬q£"ŒCOæçªÀED÷1_ëÚº.t [©T¯Á.
YoÀRXUcòz<læLµY(—ÖMÅgÏl³"7¦uı´•q ì±™[e`²86Ó,w¿%@¾”sgÒÙJ¦ïjµ¦!è¦³L¥DCnAC/àMjrô×˜ş;œ»ÊMúîçÆ85W•ŞÔ²ÚFS‚ÈPl88Ë;=eÙ(ã$ãßÈ,‚' . "\0" . 'R' . "\0" . '\'â.šŸ·N²bäï“{h³ğ¥•É³Ùš|1Sk]ò‹\\ƒNœªÛ_—µ„™í{8€EÑ2}=—+$u£ùm0¦áU:uº8$}D*sÀà%Àdİ’Ê
Ã<O}wˆ¡í×¹ı’A4R533õ”Hluéøa«uşZ‚bø“ÓØÉºDËnî"rÏBeº)— hÑ›ÖN#´Œƒº/,
^{™ôx=:Ù?:v4òîĞÓµ,tÆo!E˜ATÑëv;AîGÙñª8ÊkçètRØÑÉA/G¶ä¯VÑ^>f‡ãP°HƒŞHæt*s@1ğ.tˆ¢”[40“¢I\'¼h?Í½ìß€IGğk¹ÚÈLÆÁ[“e4õ4ƒ—g`ã)ÁÛ8`ûl+eò¥ĞNbÔÿí€æmq!&Všº' . "\0" . 'i{bk½iêŞ>rµv³ú‡>K9ë¶6à6$0e¶É‚r%ºÛvCb' . "\0" . '–«æ åºT3ö~¼àG¹öÙ	*Œp"¢7B¾ñF(õ²Ncû°lW²>ÔéÇ¡…°¶©ÉŒ¼Ãıi¿ÎÜrÄ“?³êr#aN(.:	óƒwÕ¼nV5˜Ê¯7øé@/á@io*f$E”ˆÅV‹c0l{:ÄÑ½ôìvø? P|xyŠä2î/·§s«R‚Ä÷LÅölìáıÃ‡ÉöÁØÈó±‡ Éƒ–«nÄx€Gc:GFÕ]‚òkgh_œÿßêb3§)d×±/Ó÷Ş¶½_GŒÑä`‹E…›lÂÇ1ìõ
†á€ï+¯L¦JA^¨=LÁ Üì vÍ«­<H¯fü7Uul0½ê¦éPƒÈòe~QÌ”ÛÁúZ¯šúctÎÜƒ’ó“?óÜTVí¼ñ8' . "\0" . 'cÀÎµ³ÇÆß
ü•ÊÙ¶Ú©^;´<d#G"
ÑÎa>hy„]`ÿxFZÄF®›àê<ôH÷\\âã¨‡VV+H¥²‹ÈÑiÉNFr¨1X>=ñÖ' . "\0" . 'ä %°hgSÀ“¡t‡!îCáûH' . "\0" . 'Rôk(ç)$?JJÕ?JØøÌ*×?7cd ĞËuûø}ê rívïTv#•0ŞtntÄÒiXå Ş|Ø€©r®t$ÌÑQ<‡t¸Õ(ŒÎ' . "\0" . 'æÂ³ZÊÛçÛ‡Bqø~«óÈ±p÷!×n÷ÃAÔkÛš\\gâ´z/ UŞ&2ğ¢¥†£Ëµ9ˆ>ÚãùíXş’%&€Ù!ÕU7ğJåı™—Ğ´ém§ƒ-õñîø¼Â¯Ğí!<÷îÑ½5I@.ØûS[HŸUÍ°;y¸tøH¯oY´S¬½8b¯‡[áA8×r…ËàûıŞwÈSïÏßÆß£' . "\0" . 'ÓÃ¥á1r¨jØĞ0ÒÏ°eÛu‰,èé%|ğ}ğ•Éöğ$n‚Ğäé—Ew™=¨_fm#d‹}hÀlCÏNg\'ÔP?3É3\'·é]oO±ÓÍºvUTæD¬kêE_MDİä
^"û¸ì|0”Ï-ê‘—¾•íë¸UqM–' . "\0" . '¼š
)ºúò	XñÑKß×~²p[™]ŞØM‡aÙ%üU€jÛ¦îèbëúÎmçSŸ<šKMúÛN~×Øhú‹Z®{¬/œ·ˆ©§o^VPìFùU­î£hNƒÉåI&Mü)CûıÒ¹Ø\'	ËW@®iUÈ¹-.‘k¤ä×j­' . "\0" . 'ÛSĞù>?üÉ¦lp%†Eğãå[|ÅÄÈ)y³6€N×ZíÍ³æˆŸ‰0èöÔDihŞïhŞŸ\\^á«ÛS¢ª¥õ £õ' . "\0" . 'dÊ/‰Z“˜˜ú%e¯†Ğ{
DÏ;¢çàÑ¿¤ìÆoiĞíYm©#|©2äväFä¿âQ¿ƒ>b\'2¬ğE·ÂÑ
WaÜïX£’n»–©3õ>¬ò¨[åQ´Êkù5ŒÖY>n·æ{‰æ' . "\0" . '–µ¶ı¸[ëñäò%8âpğÙ¾çúü‰ñ:Z::4h\'7Â5½kñªü%ö)ñêÏcè%}Q#2DMIµ¦M¡VSt:C}(<3ïGk!»h‘¸­tšk¨1,¼q¾xö7Á¶9Å¨nÅÎÔïüéT]ŞüÛÔÂ' . "\0" . 'ñZhàÒ”ÉÙ„8RâQûÓ9UÎwú® è“t˜Œß¼üä’ÿÅ]#s 3(V°ªËW´Í´©1åÌ÷j*–%ŸÇÉÜØ%¬Úm\'Í5J§İ¶§õŸjíŒµv' . "\0" . 'cşpwğxÉ¼N¿R©l¬×¨‚ YkéöøuÕl6{>JÄN4ˆ²ĞØqouJ‘´;­Æ¼‚ŠG0˜wƒ´li-™é5iÊ‰R©ÌÎÅW
O²i<SPÕ‚\'GH' . "\0" . '§z¬áµÀìürY«2´X<àeq¶f{ŒK±nrPì‡È“Û¹VnM&„§¸‹zŸ8¼ùú¹ÀOdE$9-Áâû¢cøÍ•=g.• \'ë$êöK»‡r¯ÖêšÎ‡“xŒ[P3v5h`ğ>\'ßÁØ*,:º­@ö¦.ğĞe_+¨O-‰Á.‘7ĞV«•»8ËãMYkÈñ¨éx¯ÕĞ3ÈÂùêG¾ŸBä9ûræ`àH—àúÚ±H­^ıI«~ñRÂèŞî•ê5l¯4ät{‘Ë=ìŸl³òÎ "ûZëSj' . "\0" . '
R„‚(Ì¼aÇtü)²^ñGï&	#Xù3á#T"ìº,u`Ô=µ$XP‚c%¡¼jÏ¼†<{Ş2:«@µHM İg@ò™Ã‰S(Œt
ZIë÷‘)Ú*zºPmáÜ%İ@µà×)ˆ6˜Ôªª•Å>X&VûÎ"üf‰Û›œA£?@~PZÉo‚ÁKC‘è@ÀŞ¤J_«,9Á{+Ï6	nÓš\'zK…É4†£JÖvà,=\\: 5ëµÊ)”b U>g´ç¹ğ¹_^ÁØO\'Ñ|;ÄÚdãêaˆãPb,­¬†‡¹X3Ô™\\BŠt¹I‘ˆ6Œv¬)' . "\0" . 'Œ bVÿaÌQ90¤÷Ğo¡L*ä:#@íõãgy|%qœ)caõiNãÙéV¥ïXL$pta­ßµ³9tykÁ1M`QÉ{.^qÄÂ÷¬w)I\'%Øµ²Ş÷—Ó”d„&' . "\0" . 'FAaÎ„…’Ø2aP' . "\0" . 'U¨¢ÉÛ˜€I…¼–:ç’9^–OÁK@S]Ğ\\ƒÇ7µ²!‚û}Â²%^f"äp' . "\0" . 'ÆJ#vr?íENà#a	Ä¢ï»ÃX]Ò)•Îçe¥ ƒò`‰ªgã°k›*¬6ÍfKÔ½wók¹‘Ø>»Š8ózI‚¤ml‘Á&Z¿±´üø„ÇØpæ#×c®H×!ƒLü¢(@œÌ¢¢q¥Ä¯ô‡Bé†Ò¶ôó¥´ÿÚ«úP¬töÁ•ÎCßgPòŠÃÇã¥!,t=xßá¬IÂğVXúNnØ)ßÑYBg´†ºÁ±Q@C/1TFT>ÊmMnDDîÖTì7M‰×5("xOïÇ×Ú³jJWC*BI3Ñ
PÎB!~tÚYû³Â´a·¤»' . "\0" . '­KG¾Ô²ÏNY4' . "\0" . 's+µ„d`hö}¹@¸ûGä¼uúPå+ïÁœ`h‡É@Òç(Üe<' . "\0" . 'ÄgƒäëÀ+,s“ xEÌpĞFààrİ|(Fù„Ÿ­6MÑİ\\¿SOe*9ŸkÖë{=€l"è–á_ñ^­ï?Šaâ[/p\\€¦u w€#A=XÖ]Ğ h8ô†®*Q†Ã`·kG†‘‚ÒI™LÊLŸµjG’ê€ì^H{¤¥©Röa†ò¤$¦¡RåkáÍá0{
r~Û' . "\0" . 'Í.H­›2åŒóæÔ49x¢±˜ƒìiYÎ2|Q,8£@7˜ìšu2Lê±l€©¹‘Ùx2¶œeª' . "\0" . 'æ;§Ë;ãÂõ–5kß—ğUdrØ+ú¶ŸĞÑıD].ÀXc{vˆ6›IØh(H¼r ã^â0)A^B1µV6ÖN˜ãZª¬˜!»%q”§v¡‡ ›”¼Œ¨&k°8ˆ‡¶+IGâ^4à­XğãA"³H_xå»oú¥í~ê1pò‡­Şl1Ï«jm ªÛß*€~8¬=„µ¶!9ˆkáù‘¦¤lhb±-„ò´¨˜‰pÇrti›Alúşzv°I¼{Ğò¶E+€í¹6Š»cÅf¢²›í4£YÊOëã"Û:¤šj‡åx<4º{¯ëaBX¿ U_R<S`™íCîQ²¹mç7ñN•kÅ€âÙleÃæ%‚#
ç…}{ìI	MÑ÷¼(Cr \\$b' . "\0" . '‘nÙÁ8Ô¢Gg¶©Ğ‡’h©PÂxuNÅ²ªH·xít*@P#M6÷S ­÷|øî—i¬Çc­`]H•ÉJ»BÚwèz~šF(¼¬†Ñ?³Ülè)BV”°õëÖv²øN0Ñz2wùºqàÇ¿dD0ÑÙ·¼ã°”è:P]ëÒSúí€†¢º©0FXq­¥øöêêõìõOW^ÄÀ–ñÚÏIÀñòøCŠfÕ¥Ÿ‡F€>SØå%™Š[Ÿtç6èL²R‘X–gàå{È*£¬ª/nÖø²Oí¢q–›É\\§`Ë®)5—óX»ÏáĞ9NÄÄwt+Ge/&!…y˜vë%a“Ù•Ó#!9!¼ÃÅÑFÑuäÊ4´±ğÍ¿^½=˜ÄxÖñòmğ¹‹nz>ö”Ìd
¬‘B#¢Í¯~ÑÕjFMg(Ãš‹Œ‘çUÜİÄtŠ¸®$Û4¬]NúŒq$ÿĞœ‹Eæé“"„…~ÍL>Ê…c¡‘üÒ÷ÏONÅÆ%¯:]ù¡ŸKåô¿ÄÂèğl»7GĞBD•İÎºş|ß‹C\'
x¹#Ï' . "\0" . '™ô{J9qhËÃ›¨å[¡ó„BK q¡’ˆ&û—L.~,ÇŠ}à¶±;Q£sl÷ÅM¼†N—†¶,v=ZÃÁ·´á‡Cœšı]®øldù^[È^+V_YÅ’Èå@|àÈ õe8Ä{!ÈbÜ	ôyé†ZmfKqvºÖøÛ ?Ö€fè—µª,5)V&7Õe´;ì	v=µSÉC¸jkí$A*ÜñÚ5	™|(ØĞ°ñ•œï½‡ñşÀ$pMGm¿eFkƒèëÜcav8U _âù^tkÖÜªó;"&C²:Áş”Ë§æH‘J˜vWÓè¥ŠÛëvµ³š¨ËªòM–ÇĞÅ¦ÜéËØd\\VÇrLß»n·LÎÊ…¦lÅGÖô¹cæ½ô¸¥>êı^İñ×UÄ¡©ÓŠœ{ÙMıF¹Q’ôœ©FVõOZ0ß¼¼Š‘N	P"˜ë”4ãÌî§7¯¦¨ineñ?,¼Œ;à>ğxC$õ÷Hq¬¤ ƒvä¥P˜_j[a6¾k¹C»P¹%`nÇ5Oz*§“|ĞŸŒ‰Ë·,’ÀòNZO*ëÎÇ¦‚œzßR{‰/Ğk_¾è®%d€#»Ã®±ÿ®4;/œ¨—Î\'o,µ• @™VÛ\\GµGˆª Ê5 kTwSó§ÊbGà…êóîìg¦Ğ£Oínë*øpÔç¤œxÓøƒ2‚GƒŒ wÕeÄïn¸òÒö€ãÃµBQƒÁàqHÊ-/îúº Õî¤¨
ÿfØu°ÈU|(´Ñ×ønœîñÛwZ|ó,¬l“$áÀ@€r3ª¯MŞt=½Ú780AH3Vã¶"+‹·Ôu€¶‰¿†¹¶c>hÁÆv5Şw [d^…¬*d.Ó8ÑÔş\\)>Cö¦Şk©–%ÖpZ™¯ËÆ©C\'b, Ä"ª1ÚMz@\\
!HeáÌ‚—WÛª}DØ0½Ö?M;Û
°òCß’Ö~x}%Ñey™Øu´bã&c' . "\0" . 'ßNÿ^Ä˜¥¨¾a0º3ş9üp7HbÑ²ÛlûxìÇïõ­O®ù®Mp@½ûo	BÀ ¬„R]¯Ï"DØğHqÁ‡`9·0,Õp]¶R^ˆ°ËÁué]ÛÁCåEá™ì9l	²âµÆ¶çAUSƒÃ¨0ı§Ç_=>õ®Åy\\ŠŸ\\‹‹®¬ÁÌÍşÇ€RWäèvËJ<{ıŠÎhçFƒkhPz\'ñá‘×sİ^eîıœ6ˆ–ñiî.¾ÓIèÛOé)Uøƒ#²»÷.xÔb!ü¡åŠ\\0’Çv7œ@ô…ëE²@ş/5ûtã.Â´Á²¾Áù5P¾+>#şL ÀÀ]\'"–¶øÙf™‡]kÏxàßÿ·ªjûùh' . "\0" . 'nto…' . "\0" . '‘[Ä’o·Ğ' . "\0" . '¦hŒ¡ƒõ½çpoæ`«Ùaÿ.ÿşPsçñîáŞ´Ïî~¯ÓÚX³vóÏY†ÿmÿò×÷ôgÓ!}:™å8>ÖæŸU·C¦û‹·ÃZ&ÚñŸÑÈ{‡šÿ?Çüó¯A§kó~şùÿ·Ì/' . "\0" . '‡òP=j“ñÁ0èràÆ5^wÿd6ßltşo=âÿœ²L
€“¥¨‚ÁÿrüFS@|øâñÿË5/ÅŠ«,3Ø' . "\0" . '\'•y¶ SDJÊmÍ-tu1
@}ØâzĞÚ@;.' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'î‰M7%““şŞ' . "\0" . '' . "\0" . '½6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '¤' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT' . "\0" . 'áGUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'Ú‰M7mh
¶’' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '¤' . "\0" . '' . "\0" . 'put_test.htmlUT' . "\0" . 'ìàGUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'ï(' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '
',
      'headers' => 
      array (
        'ETag' => 'ef383241769f0df9a982a37b53504cf2',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  123 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="0221c012", response="60acb033772c5d7239568116765b80c7"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="0221c012", response="60acb033772c5d7239568116765b80c7"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  124 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/',
        'REDIRECT_URI' => '/index.php/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/", qop=, nc=00000001, cnonce="01906254", response="dadd0eb98fe32c03c297504fd7bc9532"',
        'PHP_SELF' => '/index.php/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/", qop=, nc=00000001, cnonce="01906254", response="dadd0eb98fe32c03c297504fd7bc9532"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => '6666cd76f96956469e7be39d750cc7d9',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  125 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="1c31fd54", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="1c31fd54", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>502bbb712c359f4a1c4699d4b5c9ff27</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>cf5657d4ea808c2f8b300e5b148df562</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>22789e94da0ed3d0c1d084816e366220</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>082f894be3770c1d4a37d15032a3b493</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  126 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="1c31fd54", response="60acb033772c5d7239568116765b80c7"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="1c31fd54", response="60acb033772c5d7239568116765b80c7"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  127 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="1c31fd54", response="60acb033772c5d7239568116765b80c7"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="1c31fd54", response="60acb033772c5d7239568116765b80c7"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  128 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="1c31fd54", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="1c31fd54", response="df0988895fa7ed119ef0e0c7ec1ea275"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>502bbb712c359f4a1c4699d4b5c9ff27</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>cf5657d4ea808c2f8b300e5b148df562</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>22789e94da0ed3d0c1d084816e366220</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>082f894be3770c1d4a37d15032a3b493</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  129 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="1c31fd54", response="60acb033772c5d7239568116765b80c7"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="1c31fd54", response="60acb033772c5d7239568116765b80c7"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  130 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_non_utf8.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_non_utf8.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_non_utf8.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_non_utf8.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/put_test_non_utf8.txt',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_non_utf8.txt", qop=, nc=00000001, cnonce="1c31fd54", response="aba4a63692f1d507169c63740ef3d7c4"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_non_utf8.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_non_utf8.txt", qop=, nc=00000001, cnonce="1c31fd54", response="aba4a63692f1d507169c63740ef3d7c4"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  131 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_renamed.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_renamed.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_renamed.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_renamed.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/put_test_renamed.xml',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_renamed.xml", qop=, nc=00000001, cnonce="1c31fd54", response="7015fa07c6d7a0bd4a8516d5024f62b5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_renamed.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_renamed.xml", qop=, nc=00000001, cnonce="1c31fd54", response="7015fa07c6d7a0bd4a8516d5024f62b5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  132 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt", qop=, nc=00000001, cnonce="1c31fd54", response="ff0da39139fba8540cc9cd97b140849d"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt", qop=, nc=00000001, cnonce="1c31fd54", response="ff0da39139fba8540cc9cd97b140849d"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  133 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="1c31fd54", response="60acb033772c5d7239568116765b80c7"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="1c31fd54", response="60acb033772c5d7239568116765b80c7"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>76d10dcb28faf16c21889b0ca35af344</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>1839d9ae5899689fa9822c4c6da7f698</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>13611068a7ac56cb9117b140d12db864</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  134 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="1c31fd54", response="60acb033772c5d7239568116765b80c7"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="1c31fd54", response="60acb033772c5d7239568116765b80c7"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>76d10dcb28faf16c21889b0ca35af344</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>1839d9ae5899689fa9822c4c6da7f698</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>13611068a7ac56cb9117b140d12db864</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  135 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir_renamed/',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_CONTENT_LENGTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="1c31fd54", response="05b4a2a2ae7c9d51cc0b0546f3952e2b"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir/", qop=, nc=00000001, cnonce="1c31fd54", response="05b4a2a2ae7c9d51cc0b0546f3952e2b"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  136 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?><d:propfind xmlns:d="DAV:"><d:prop><d:getlastmodified/><d:getcontentlength/><d:getcontenttype/><d:resourcetype/><d:getetag/><d:lockdiscovery/></d:prop></d:propfind>',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'CONTENT_LENGTH' => '220',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '220',
        'CONTENT_TYPE' => 'text/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="00091c0e", response="60acb033772c5d7239568116765b80c7"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/", qop=, nc=00000001, cnonce="00091c0e", response="60acb033772c5d7239568116765b80c7"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_non_utf8.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>76d10dcb28faf16c21889b0ca35af344</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>1839d9ae5899689fa9822c4c6da7f698</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18675</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>13611068a7ac56cb9117b140d12db864</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>740</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir_renamed</D:href>
    <D:propstat>
      <D:prop>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>fa87f05f3ae2dd9b9b1139818c54e208</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery xmlns:d="DAV:"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  137 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/file.txt", qop=, nc=00000001, cnonce="00091c0e", response="a70ae5162a8dce83f24b4fb74588966f"',
        'PHP_SELF' => '/index.php/secure_collection/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/file.txt", qop=, nc=00000001, cnonce="00091c0e", response="a70ae5162a8dce83f24b4fb74588966f"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  138 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_non_utf8.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_non_utf8.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_non_utf8.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_non_utf8.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/put_test_non_utf8.txt", qop=, nc=00000001, cnonce="00091c0e", response="6b2d985391adb37fa76c0acb11ce6903"',
        'PHP_SELF' => '/index.php/secure_collection/put_test_non_utf8.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/put_test_non_utf8.txt", qop=, nc=00000001, cnonce="00091c0e", response="6b2d985391adb37fa76c0acb11ce6903"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  139 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_renamed.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_renamed.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_renamed.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_renamed.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/put_test_renamed.xml", qop=, nc=00000001, cnonce="00091c0e", response="589eb67316256e90537bf8b9f2c35a7e"',
        'PHP_SELF' => '/index.php/secure_collection/put_test_renamed.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/put_test_renamed.xml", qop=, nc=00000001, cnonce="00091c0e", response="589eb67316256e90537bf8b9f2c35a7e"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  140 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt", qop=, nc=00000001, cnonce="00091c0e", response="b51f742260f7b37bb7618ce33f8ef80c"',
        'PHP_SELF' => '/index.php/secure_collection/put_test_Ã¶Ã¤Ã¼ÃŸ.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/put_test_%C3%B6%C3%A4%C3%BC%C3%9F.txt", qop=, nc=00000001, cnonce="00091c0e", response="b51f742260f7b37bb7618ce33f8ef80c"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  141 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'LANG' => 'en_US.UTF-8',
        'SERVER_SOFTWARE' => 'lighttpd/1.4.20',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '127.0.0.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '127.0.0.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir_renamed/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir_renamed/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir_renamed/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir_renamed/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'BitKinex/3.0.2',
        'HTTP_ACCEPT' => '*/*',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_TRANSLATE' => 'f',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir_renamed/", qop=, nc=00000001, cnonce="00091c0e", response="e0812143c103f52b37175ca84bd95b21"',
        'PHP_SELF' => '/index.php/secure_collection/subdir_renamed/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef3b75da8f0b48c9e277c19d6dea6aec", uri="/secure_collection/subdir_renamed/", qop=, nc=00000001, cnonce="00091c0e", response="e0812143c103f52b37175ca84bd95b21"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.20/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
);
?>