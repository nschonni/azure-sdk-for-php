<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   WindowsAzure\ServiceManagement\Models
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/windowsazure/azure-sdk-for-php
 */
 
namespace WindowsAzure\ServiceManagement\Models;
use WindowsAzure\Common\Internal\Validate;

/**
 * The optional parameters for updateStorageService API.
 *
 * @category  Microsoft
 * @package   WindowsAzure\ServiceManagement\Models
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: 0.4.1_2015-02
 * @link      https://github.com/windowsazure/azure-sdk-for-php
 */
class UpdateServiceOptions
{
    /**
     * @var string
     */
    private $_label;
    
    /**
     * @var string
     */
    private $_description;
    
    /**
     * Gets the label.
     * 
     * @return string
     */
    public function getLabel()
    {
        return $this->_label;
    }
    
    /**
     * Sets the label.
     * 
     * @param string $label The label.
     * 
     * @return none
     */
    public function setLabel($label)
    {
        Validate::isString($label, 'label');
        
        $this->_label = $label;
    }
    
    /**
     * Gets the description.
     * 
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }
    
    /**
     * Sets the description.
     * 
     * @param string $description The description.
     * 
     * @return none
     */
    public function setDescription($description)
    {
        Validate::isString($description, 'description');
        
        $this->_description = $description;
    }
}


