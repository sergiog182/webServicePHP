<?php
	/**
	 * server Clase encargada de exponer la funcionalidad de hodeline web
	 *
	 * @date    10 de enero 2017
	 * @author  Luis Castillo
	 */

	ini_set("soap.wsdl_cache_enabled", 0);
	ini_set('memory_limit','256M');
	require_once 'autoload.php';
	require_once 'interfaceCalculadora.php';

	try {
	    $server = new soapServer('contracts/wsdl/calculadora.wsdl',array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP));
	    $server->setClass('servicesExposed');
	    $server->handle();
	} catch (SOAPFault $f) {
	    print $f->faultstrings;
	}