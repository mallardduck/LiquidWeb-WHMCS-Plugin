<?php

/**********************************************************************
 *  Liquid Web - Private Parent (2013-11-22)
 * *
 *
 *  CREATED BY MODULESGARDEN       ->        http://modulesgarden.com
 *  CONTACT                        ->       contact@modulesgarden.com
 *
 *
 *
 *
 * This software is furnished under a license and may be used and copied
 * only  in  accordance  with  the  terms  of such  license and with the
 * inclusion of the above copyright notice.  This software  or any other
 * copies thereof may not be provided or otherwise made available to any
 * other person.  No title to and  ownership of the  software is  hereby
 * transferred.
 *
 *
 **********************************************************************/


/**
 * @author Mariusz Miodowski <mariusz@modulesgarden.com>
 */


require_once ROOTDIR.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'StormOnDemand'.DIRECTORY_SEPARATOR.'modulesgarden'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.'class.StormOnDemand_Product.php';

class StormOnDemandPrivateParentProduct extends StormOnDemand_Product
{
    public $defaultConfig = array
    (
        //Connection
        'gr1'                           =>  'Connection Settings',
        'Username'                      =>  array
        (
            'title'                     =>  'Username',
            'type'                      =>  'text',
        ),
        'Password'                      =>  array
        (
            'title'                     =>  'Password',
            'type'                      =>  'password',
        ),
        //Auto generate
        'gr2'                           =>  'Generate Options',
        'generate_configurable_options' =>  true,
        'genereate_custom_field'        =>  true,
        //Configuration
        'gr3'                           =>  'Configuration',
        'Parent'                        =>  array
        (
            'title'                     =>  'Parent Server',
            'type'                      =>  'select',
            'options'                   =>  array(),
            'useOptionsKeys'            =>  true,
        ),
        'AvailableParents'               =>  array
        (
            'title'                     =>  'Available Parents',
            'type'                      =>  'multiselect',
            'options'                   =>  array(),
            'useOptionsKeys'            =>  true,
        ),
        'AutoParent'                    =>  array
        (
            'title'                     =>  'Select Parent Automatically',
            'type'                      =>  'checkbox',
            'description'               =>  'Tick to automatically choose private cloud from "Available Parent"'
        ),
        'Template'                      =>  array
        (
            'title'                     =>  'Template',
            'type'                      =>  'text',
            'description'               =>  '<a id="load-storm-template" href="stormajax=load-template" class="load-configuration">Load Template</a>'
        ),
        'Image'                         =>  array
        (
            'title'                     =>  'Image',
            'type'                      =>  'text',
            'description'               =>  '<a id="load-storm-image" href="stormajax=load-image" class="load-configuration">Load Image</a>'
        ),
        'Memory'                        =>  array
        (
            'title'                     =>  'Memory (MB)',
            'type'                      =>  'text',
            'default'                   =>  1024
        ),
        'Diskspace'                     =>  array
        (
            'title'                     =>  'Disk Space (GB)',
            'type'                      =>  'text',
            'default'                   =>  15
        ),
        'VCPU'                          =>  array
        (
            'title'                     =>  'Virtual CPU',
            'type'                      =>  'text',
            'default'                   =>  1
        ),
        'Backup Plan'                   =>  array
        (
            'title'                     =>  'Backup Plan',
            'type'                      =>  'select',
            'options'                   =>  array
            (
                0                       =>  'Disabled',
                'quota'                 =>  'Quota',
                'daily'                 =>  'Daily',
            ),
            'useOptionsKeys'            =>  true,
        ),
        'Backup Quota'                  =>  array
        (
            'title'                     =>  'Backup Quota',
            'type'                      =>  'text',
            'default'                   =>  0
        ),
        'Daily Backup Quota'            =>  array
        (
            'title'                     =>  'Daily Backup Quota',
            'type'                      =>  'text',
            'default'                   =>  0
        ),
        'Number of IPs'                 =>  array
        (
            'title'                     =>  'Number of IPs',
            'type'                      =>  'text',
            'default'                   =>  1
        ),
        'Maximum IP Addresses'            =>  array
        (
            'title'                     =>  'Maximum IP Addresses',
            'type'                      =>  'text',
            'default'                   =>  1
        ),
        'Bandwidth Quota'               =>  array
        (
            'title'                     =>  'Bandwidth Quota (GB)',
            'type'                      =>  'select',
            'options'                   =>  array
            (
                'Pay as You Go'         =>  'Pay as You Go',
                '250'                   =>  '250',
                '500'                   =>  '500',
                '1000'                  =>  '1000',
                '2000'                  =>  '2000',
                '4000'                  =>  '4000'
            ),
            'useOptionsKeys'            =>  true,
        ),
        'gr4'                           =>  'Client Area',
        'Monitoring'                    =>  array
        (
            'title'                     =>  'Monitoring',
            'type'                      =>  'checkbox',
            'description'               =>  'Tick to give possibility to monitoring server from Client Area'
        ),
        'Firewall'                      =>  array
        (
            'title'                     =>  'Firewall',
            'type'                      =>  'checkbox',
            'description'               =>  'Tick to give possibility to manage firewall from Client Area'
        ),
        'IPs Management'                =>  array
        (
            'title'                     =>  'IPs Management',
            'type'                      =>  'checkbox',
            'description'               =>  'Tick to give possibility to manage IPs addresses from Client Area'
        ),
    );

    public $defaultCustomField = array
    (
        'uniq_id'           =>  array
        (
            'title'         =>  'Uniq ID',
            'type'          =>  'text',
            'adminonly'     =>  true,
            'required'      =>  false,
            'showorder'     =>  false,
            'showinvoice'   =>  false
        ),
    );

    public $defaultConfigurableOptions = array
    (
        'mygroup' => array
        (
            'title'                     =>  'Storm On Demand Private Cloud',
            'description'               =>  'Autogenerated By Module',
            'fields'                    =>  array
            (
                'Parent'                =>  array
                (
                    'title'             =>  'Parent Server',
                    'type'              =>  'select',
                    'options'           =>  array()
                ),
                'Template'              =>  array
                (
                    'title'             =>  'Template',
                    'type'              =>  'select',
                    'options'           =>  array()
                ),
                'Image'                 =>  array
                (
                    'title'             =>  'Image',
                    'type'              =>  'select',
                    'options'           =>  array()
                ),
                'Memory'                =>  array
                (
                    'title'             =>  'Memory (MB)',
                    'type'              =>  'quantity',
                    'qtyminimum'        =>  1024,
                    'qtymaximum'        =>  10240,
                    'options'           =>  array
                    (
                        array
                        (
                            'value'         =>  0,
                            'title'         =>  'MB'
                        )
                    )
                ),
                'Diskspace'             =>  array
                (
                    'title'             =>  'Diskspace (GB)',
                    'type'              =>  'quantity',
                    'qtyminimum'        =>  15,
                    'qtymaximum'        =>  500,
                    'options'           =>  array
                    (
                        array
                        (
                            'value'         =>  0,
                            'title'         =>  'GB'
                        ),
                    )
                ),
                'VCPU'                  =>  array
                (
                    'title'             =>  'VCPU',
                    'type'              =>  'quantity',
                    'qtyminimum'        =>  1,
                    'qtymaximum'        =>  8,
                    'options'           =>  array
                    (
                        array
                        (
                            'value'         =>  0,
                            'title'         =>  'Units'
                        )
                    )
                ),
                'Backup Plan'           =>  array
                (
                    'title'             =>  'Backup Plan',
                    'type'              =>  'select',
                    'options'           =>  array
                    (
                        array
                        (
                            'value'     =>  0,
                            'title'     =>  'Disabled'
                        ),
                        array
                        (
                            'value'     =>  'quota',
                            'title'     =>  'Quota'
                        ),
                        array
                        (
                            'value'     =>  'daily',
                            'title'     =>  'Daily'
                        )
                    )
                ),
                'Backup Quota'          =>  array
                (
                    'title'             =>  'Backup Quota',
                    'type'              =>  'select',
                    'options'           =>  array
                    (
                        array
                        (
                            'value'     =>  '100',
                            'title'     =>  '100 GB',
                        ),
                        array
                        (
                            'value'     =>  '200',
                            'title'     =>  '200 GB'
                        ),
                        array
                        (
                            'value'     =>  '500',
                            'title'     =>  '500 GB'
                        )
                    )
                ),
                'Daily Backup Quota'    =>  array
                (
                    'title'             =>  'Daily Backup Quota',
                    'type'              =>  'select',
                    'options'           =>  array
                    (
                        array
                        (
                            'value'     =>  1,
                            'title'     =>  1,
                        ),
                        array
                        (
                            'value'     =>  2,
                            'title'     =>  2,
                        ),
                        array
                        (
                            'value'     =>  3,
                            'title'     =>  3,
                        ),
                        array
                        (
                            'value'     =>  4,
                            'title'     =>  4
                        )
                    )
                ),
                'Number of IPs'         =>  array
                (
                    'title'             =>  'Number of IPs',
                    'type'              =>  'select',
                    'options'           =>  array
                    (
                        array
                        (
                            'value'     =>  1,
                            'title'     =>  1,
                        ),
                        array
                        (
                            'value'     =>  2,
                            'title'     =>  2,
                        ),
                        array
                        (
                            'value'     =>  3,
                            'title'     =>  3,
                        ),
                        array
                        (
                            'value'     =>  4,
                            'title'     =>  4
                        )
                    )
                ),
                'Maximum IP Addresses'    =>  array
                (
                    'title'             =>  'Maximum IP Addresses',
                    'type'              =>  'select',
                    'options'           =>  array
                    (
                        array
                        (
                            'value'     =>  1,
                            'title'     =>  1,
                        ),
                        array
                        (
                            'value'     =>  2,
                            'title'     =>  2,
                        ),
                        array
                        (
                            'value'     =>  3,
                            'title'     =>  3,
                        ),
                        array
                        (
                            'value'     =>  4,
                            'title'     =>  4
                        )
                    )
                ),
                'Bandwidth Quota'       =>  array
                (
                    'title'             =>  'Bandwidth Quota',
                    'type'              =>  'select',
                    'options'           =>  array
                    (
                        array
                        (
                            'value'     =>  'Pay as You Go',
                            'title'     =>  'Pay as You Go',
                        ),
                        array
                        (
                            'value'     =>  250,
                            'title'     =>  250,
                        ),
                        array
                        (
                            'value'     =>  500,
                            'title'     =>  500,
                        ),
                        array
                        (
                            'value'     =>  1000,
                            'title'     =>  1000
                        ),
                        array
                        (
                            'value'     =>  2000,
                            'title'     =>  2000,
                        ),
                        array
                        (
                            'value'     =>  4000,
                            'title'     =>  4000
                        )
                    )
                ),
                'Monitoring'            =>  array
                (
                    'title'             =>  'Monitoring',
                    'type'              =>  'yesno',
                    'options'           =>  array
                    (
                        array
                        (
                            'value'     =>  1,
                            'title'     =>  'Enabled'
                        )
                    )
                ),
                'Firewall'              =>  array
                (
                    'title'             =>  'Firewall',
                    'type'              =>  'yesno',
                    'options'           =>  array
                    (
                        array
                        (
                            'value'     =>  1,
                            'title'     =>  'Enabled'
                        )
                    )
                ),
                'IPs Management'        =>  array
                (
                    'title'             =>  'IPs Management',
                    'type'              =>  'yesno',
                    'options'           =>  array
                    (
                        array
                        (
                            'value'     =>  1,
                            'title'     =>  'Enabled'
                        )
                    )
                ),
            )
        )
    );

	public $xmlTemplateConfigs = array(

        'username' =>  array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[Username]',
				'reset' => false,
        ),

        'password' => array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[Password]',
				'reset' => false,
        ),

        'parent' => array(
				'type' => 'select',
				'name' => 'customconfigoption[Parent Server]',
        ),

        'available_parents' =>  array(
				'type' => 'select',
				'name' => 'customconfigoption[AvailableParents]',
        ),

        'auto_parent' =>  array(
				'type' => 'checkbox',
				'name' => 'customconfigoption[AutoParent]',
        ),

        'template' =>  array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[Template]',
        ),

        'image' =>  array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[Image]',
        ),

        'memory' =>  array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[Memory]',
        ),

        'diskspace' =>  array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[Diskspace]',
        ),

        'vcpu' =>  array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[VCPU]',
        ),

        'backup_plan' =>  array(
				'type' => 'select',
				'name' => 'customconfigoption[Backup Plan]',
        ),

        'backup_quota' =>  array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[Backup Quota]',
        ),

        'daily_backup_quota' =>  array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[Daily Backup Quota]',
        ),

        'ips_number' =>  array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[Number of IPs]',
        ),

        'maximum_ips_number' =>  array(
				'type'  => 'text',
				'name'	=> 'customconfigoption[Maximum IP Addresses]',
        ),

        'bandwidth_quota' =>  array(
				'type' => 'select',
				'name' => 'customconfigoption[Bandwidth Quota]',
        ),

        'monitoring' =>  array(
				'type' => 'checkbox',
				'name' => 'customconfigoption[Monitoring]',
        ),

        'firewall' =>  array(
				'type' => 'checkbox',
				'name' => 'customconfigoption[Firewall]',
        ),

        'ips_management' =>  array(
				'type' => 'checkbox',
				'name' => 'customconfigoption[IPs Management]',
        ),
	);
}
