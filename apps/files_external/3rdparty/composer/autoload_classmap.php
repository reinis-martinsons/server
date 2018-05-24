<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = $vendorDir;

return array(
    'Icewind\\SMB\\AbstractServer' => $vendorDir . '/icewind/smb/src/AbstractServer.php',
    'Icewind\\SMB\\AbstractShare' => $vendorDir . '/icewind/smb/src/AbstractShare.php',
    'Icewind\\SMB\\AnonymousAuth' => $vendorDir . '/icewind/smb/src/AnonymousAuth.php',
    'Icewind\\SMB\\BasicAuth' => $vendorDir . '/icewind/smb/src/BasicAuth.php',
    'Icewind\\SMB\\Change' => $vendorDir . '/icewind/smb/src/Change.php',
    'Icewind\\SMB\\Exception\\AccessDeniedException' => $vendorDir . '/icewind/smb/src/Exception/AccessDeniedException.php',
    'Icewind\\SMB\\Exception\\AlreadyExistsException' => $vendorDir . '/icewind/smb/src/Exception/AlreadyExistsException.php',
    'Icewind\\SMB\\Exception\\AuthenticationException' => $vendorDir . '/icewind/smb/src/Exception/AuthenticationException.php',
    'Icewind\\SMB\\Exception\\ConnectException' => $vendorDir . '/icewind/smb/src/Exception/ConnectException.php',
    'Icewind\\SMB\\Exception\\ConnectionException' => $vendorDir . '/icewind/smb/src/Exception/ConnectionException.php',
    'Icewind\\SMB\\Exception\\ConnectionRefusedException' => $vendorDir . '/icewind/smb/src/Exception/ConnectionRefusedException.php',
    'Icewind\\SMB\\Exception\\DependencyException' => $vendorDir . '/icewind/smb/src/Exception/DependencyException.php',
    'Icewind\\SMB\\Exception\\Exception' => $vendorDir . '/icewind/smb/src/Exception/Exception.php',
    'Icewind\\SMB\\Exception\\FileInUseException' => $vendorDir . '/icewind/smb/src/Exception/FileInUseException.php',
    'Icewind\\SMB\\Exception\\ForbiddenException' => $vendorDir . '/icewind/smb/src/Exception/ForbiddenException.php',
    'Icewind\\SMB\\Exception\\HostDownException' => $vendorDir . '/icewind/smb/src/Exception/HostDownException.php',
    'Icewind\\SMB\\Exception\\InvalidArgumentException' => $vendorDir . '/icewind/smb/src/Exception/InvalidArgumentException.php',
    'Icewind\\SMB\\Exception\\InvalidHostException' => $vendorDir . '/icewind/smb/src/Exception/InvalidHostException.php',
    'Icewind\\SMB\\Exception\\InvalidParameterException' => $vendorDir . '/icewind/smb/src/Exception/InvalidParameterException.php',
    'Icewind\\SMB\\Exception\\InvalidPathException' => $vendorDir . '/icewind/smb/src/Exception/InvalidPathException.php',
    'Icewind\\SMB\\Exception\\InvalidRequestException' => $vendorDir . '/icewind/smb/src/Exception/InvalidRequestException.php',
    'Icewind\\SMB\\Exception\\InvalidResourceException' => $vendorDir . '/icewind/smb/src/Exception/InvalidResourceException.php',
    'Icewind\\SMB\\Exception\\InvalidTypeException' => $vendorDir . '/icewind/smb/src/Exception/InvalidTypeException.php',
    'Icewind\\SMB\\Exception\\NoLoginServerException' => $vendorDir . '/icewind/smb/src/Exception/NoLoginServerException.php',
    'Icewind\\SMB\\Exception\\NoRouteToHostException' => $vendorDir . '/icewind/smb/src/Exception/NoRouteToHostException.php',
    'Icewind\\SMB\\Exception\\NotEmptyException' => $vendorDir . '/icewind/smb/src/Exception/NotEmptyException.php',
    'Icewind\\SMB\\Exception\\NotFoundException' => $vendorDir . '/icewind/smb/src/Exception/NotFoundException.php',
    'Icewind\\SMB\\Exception\\OutOfSpaceException' => $vendorDir . '/icewind/smb/src/Exception/OutOfSpaceException.php',
    'Icewind\\SMB\\Exception\\RevisionMismatchException' => $vendorDir . '/icewind/smb/src/Exception/RevisionMismatchException.php',
    'Icewind\\SMB\\Exception\\TimedOutException' => $vendorDir . '/icewind/smb/src/Exception/TimedOutException.php',
    'Icewind\\SMB\\IAuth' => $vendorDir . '/icewind/smb/src/IAuth.php',
    'Icewind\\SMB\\IFileInfo' => $vendorDir . '/icewind/smb/src/IFileInfo.php',
    'Icewind\\SMB\\INotifyHandler' => $vendorDir . '/icewind/smb/src/INotifyHandler.php',
    'Icewind\\SMB\\IServer' => $vendorDir . '/icewind/smb/src/IServer.php',
    'Icewind\\SMB\\IShare' => $vendorDir . '/icewind/smb/src/IShare.php',
    'Icewind\\SMB\\KerberosAuth' => $vendorDir . '/icewind/smb/src/KerberosAuth.php',
    'Icewind\\SMB\\Native\\NativeFileInfo' => $vendorDir . '/icewind/smb/src/Native/NativeFileInfo.php',
    'Icewind\\SMB\\Native\\NativeReadStream' => $vendorDir . '/icewind/smb/src/Native/NativeReadStream.php',
    'Icewind\\SMB\\Native\\NativeServer' => $vendorDir . '/icewind/smb/src/Native/NativeServer.php',
    'Icewind\\SMB\\Native\\NativeShare' => $vendorDir . '/icewind/smb/src/Native/NativeShare.php',
    'Icewind\\SMB\\Native\\NativeState' => $vendorDir . '/icewind/smb/src/Native/NativeState.php',
    'Icewind\\SMB\\Native\\NativeStream' => $vendorDir . '/icewind/smb/src/Native/NativeStream.php',
    'Icewind\\SMB\\Native\\NativeWriteStream' => $vendorDir . '/icewind/smb/src/Native/NativeWriteStream.php',
    'Icewind\\SMB\\ServerFactory' => $vendorDir . '/icewind/smb/src/ServerFactory.php',
    'Icewind\\SMB\\System' => $vendorDir . '/icewind/smb/src/System.php',
    'Icewind\\SMB\\Test\\AbstractShareTest' => $vendorDir . '/icewind/smb/tests/AbstractShareTest.php',
    'Icewind\\SMB\\Test\\NativeShareTest' => $vendorDir . '/icewind/smb/tests/NativeShareTest.php',
    'Icewind\\SMB\\Test\\NativeStreamTest' => $vendorDir . '/icewind/smb/tests/NativeStreamTest.php',
    'Icewind\\SMB\\Test\\NotifyHandlerTest' => $vendorDir . '/icewind/smb/tests/NotifyHandlerTest.php',
    'Icewind\\SMB\\Test\\ParserTest' => $vendorDir . '/icewind/smb/tests/ParserTest.php',
    'Icewind\\SMB\\Test\\ServerTest' => $vendorDir . '/icewind/smb/tests/ServerTest.php',
    'Icewind\\SMB\\Test\\ShareTest' => $vendorDir . '/icewind/smb/tests/ShareTest.php',
    'Icewind\\SMB\\Test\\TestCase' => $vendorDir . '/icewind/smb/tests/TestCase.php',
    'Icewind\\SMB\\TimeZoneProvider' => $vendorDir . '/icewind/smb/src/TimeZoneProvider.php',
    'Icewind\\SMB\\Wrapped\\Connection' => $vendorDir . '/icewind/smb/src/Wrapped/Connection.php',
    'Icewind\\SMB\\Wrapped\\ErrorCodes' => $vendorDir . '/icewind/smb/src/Wrapped/ErrorCodes.php',
    'Icewind\\SMB\\Wrapped\\FileInfo' => $vendorDir . '/icewind/smb/src/Wrapped/FileInfo.php',
    'Icewind\\SMB\\Wrapped\\NotifyHandler' => $vendorDir . '/icewind/smb/src/Wrapped/NotifyHandler.php',
    'Icewind\\SMB\\Wrapped\\Parser' => $vendorDir . '/icewind/smb/src/Wrapped/Parser.php',
    'Icewind\\SMB\\Wrapped\\RawConnection' => $vendorDir . '/icewind/smb/src/Wrapped/RawConnection.php',
    'Icewind\\SMB\\Wrapped\\Server' => $vendorDir . '/icewind/smb/src/Wrapped/Server.php',
    'Icewind\\SMB\\Wrapped\\Share' => $vendorDir . '/icewind/smb/src/Wrapped/Share.php',
    'Icewind\\Streams\\CallbackWrapper' => $vendorDir . '/icewind/streams/src/CallbackWrapper.php',
    'Icewind\\Streams\\Directory' => $vendorDir . '/icewind/streams/src/Directory.php',
    'Icewind\\Streams\\DirectoryFilter' => $vendorDir . '/icewind/streams/src/DirectoryFilter.php',
    'Icewind\\Streams\\DirectoryWrapper' => $vendorDir . '/icewind/streams/src/DirectoryWrapper.php',
    'Icewind\\Streams\\File' => $vendorDir . '/icewind/streams/src/File.php',
    'Icewind\\Streams\\IteratorDirectory' => $vendorDir . '/icewind/streams/src/IteratorDirectory.php',
    'Icewind\\Streams\\NullWrapper' => $vendorDir . '/icewind/streams/src/NullWrapper.php',
    'Icewind\\Streams\\Path' => $vendorDir . '/icewind/streams/src/Path.php',
    'Icewind\\Streams\\PathWrapper' => $vendorDir . '/icewind/streams/src/PathWrapper.php',
    'Icewind\\Streams\\RetryWrapper' => $vendorDir . '/icewind/streams/src/RetryWrapper.php',
    'Icewind\\Streams\\SeekableWrapper' => $vendorDir . '/icewind/streams/src/SeekableWrapper.php',
    'Icewind\\Streams\\Tests\\CallbackWrapperTest' => $vendorDir . '/icewind/streams/tests/CallbackWrapperTest.php',
    'Icewind\\Streams\\Tests\\CountWrapperTest' => $vendorDir . '/icewind/streams/tests/CountWrapperTest.php',
    'Icewind\\Streams\\Tests\\DirectoryFilter' => $vendorDir . '/icewind/streams/tests/DirectoryFilter.php',
    'Icewind\\Streams\\Tests\\DirectoryWrapper' => $vendorDir . '/icewind/streams/tests/DirectoryWrapper.php',
    'Icewind\\Streams\\Tests\\DirectoryWrapperDummy' => $vendorDir . '/icewind/streams/tests/DirectoryWrapper.php',
    'Icewind\\Streams\\Tests\\DirectoryWrapperNull' => $vendorDir . '/icewind/streams/tests/DirectoryWrapper.php',
    'Icewind\\Streams\\Tests\\FailWrapper' => $vendorDir . '/icewind/streams/tests/RetryWrapper.php',
    'Icewind\\Streams\\Tests\\IteratorDirectory' => $vendorDir . '/icewind/streams/tests/IteratorDirectory.php',
    'Icewind\\Streams\\Tests\\NullWrapperTest' => $vendorDir . '/icewind/streams/tests/NullWrapperTest.php',
    'Icewind\\Streams\\Tests\\PartialWrapper' => $vendorDir . '/icewind/streams/tests/RetryWrapper.php',
    'Icewind\\Streams\\Tests\\PathWrapper' => $vendorDir . '/icewind/streams/tests/PathWrapper.php',
    'Icewind\\Streams\\Tests\\RetryWrapperTest' => $vendorDir . '/icewind/streams/tests/RetryWrapper.php',
    'Icewind\\Streams\\Tests\\SeekableWrapper' => $vendorDir . '/icewind/streams/tests/SeekableWrapper.php',
    'Icewind\\Streams\\Tests\\UrlCallBack' => $vendorDir . '/icewind/streams/tests/UrlCallBack.php',
    'Icewind\\Streams\\Tests\\WrapperTest' => $vendorDir . '/icewind/streams/tests/WrapperTest.php',
    'Icewind\\Streams\\Url' => $vendorDir . '/icewind/streams/src/Url.php',
    'Icewind\\Streams\\UrlCallback' => $vendorDir . '/icewind/streams/src/UrlCallBack.php',
    'Icewind\\Streams\\Wrapper' => $vendorDir . '/icewind/streams/src/Wrapper.php',
);
