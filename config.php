<?php
/**----------------------------------------------------------------------------------
* Microsoft Developer & Platform Evangelism
*
* Copyright (c) Microsoft Corporation. All rights reserved.
*
* THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND, 
* EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE IMPLIED WARRANTIES 
* OF MERCHANTABILITY AND/OR FITNESS FOR A PARTICULAR PURPOSE.
*----------------------------------------------------------------------------------
* The example companies, organizations, products, domain names,
* e-mail addresses, logos, people, places, and events depicted
* herein are fictitious.  No association with any real company,
* organization, product, domain name, email address, logo, person,
* places, or events is intended or should be inferred.
*----------------------------------------------------------------------------------
**/

class Config
{
    const ACCOUNT_NAME = 'storagesoracom';
    const ACCOUNT_KEY = 'fU9GepJPZu7/w3BpZn4O99Bj5AsE7KLfxN4qdZskTljcqxG8FX9DSZRtHo2CTNz3g3QV+52z9aJse/d9ww1ftQ==';
    const IS_EMULATED = true;

    public static function getConnectionString()
    {
      if(Config::IS_EMULATED)
        return "UseDevelopmentStorage=true";
      else
        return "DefaultEndpointsProtocol=https;AccountName=" . Config::ACCOUNT_NAME . ";AccountKey=" . Config::ACCOUNT_KEY;
    }
}
?>