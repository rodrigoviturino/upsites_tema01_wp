<?php 
// Rede Social do Header

function up_header_customizer( $wp_customize ) {

    // Settings

    // Logo
    $wp_customize->add_setting('up_logo_header', ['default' => '']);

    // Row Top
    $wp_customize->add_setting('up_facebook', ['default' => '']);
    $wp_customize->add_setting('up_twitter', ['default' => '']);
    $wp_customize->add_setting('up_linkedin', ['default' => '']);
    $wp_customize->add_setting('up_instagram', ['default' => '']);
    $wp_customize->add_setting('up_text_contact_header', ['default' => '']);
    $wp_customize->add_setting('up_link_contact_header', ['default' => '']);
    
    // Row Center
    $wp_customize->add_setting('up_nome_escriorio', ['default' => '']);
    $wp_customize->add_setting('up_endereco_escriorio', ['default' => '']);

    // Row Bottom
    $wp_customize->add_setting('up_link_telefone', ['default' => '']);
    $wp_customize->add_setting('up_telefone', ['default' => '']);
    // $wp_customize->add_setting('up_email', ['default' => '']);
    // $wp_customize->add_setting('up_endereco', ['default' => '']);



    // Sections
    $wp_customize->add_section('up_header_section', [
        'title' => 'Header - Infos',
        'priority' => '1'
    ]);

    // Controllers

    // Infos


        // Row Top - Rede Social 
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_facebook',
                    [
                        'label'=>'Link do Facebook',
                        'section' => 'up_header_section',
                        'settings' => 'up_facebook',
                        'type' => 'text'  
                    ]
            )
        );
        
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_twitter',
                    [
                        'label'=>'Link do Twitter',
                        'section' => 'up_header_section',
                        'settings' => 'up_twitter',
                        'type' => 'text'  
                    ]
            )
        );
    
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_instagram',
                    [
                        'label'=>'Link do Instagram',
                        'section' => 'up_header_section',
                        'settings' => 'up_instagram',
                        'type' => 'text'  
                    ]
            )
        );
    
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_linkedin',
                    [
                        'label'=>'Link do Linkedin',
                        'section' => 'up_header_section',
                        'settings' => 'up_linkedin',
                        'type' => 'text'  
                    ]
            )
        );
        // Botão Contato Header
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_text_contact_header',
                    [
                        'label'=>'Texto Botão Contato Header',
                        'section' => 'up_header_section',
                        'settings' => 'up_text_contact_header',
                        'type' => 'text'  
                    ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_link_contact_header',
                    [
                        'label'=>'Link Botão Contato Header',
                        'section' => 'up_header_section',
                        'settings' => 'up_link_contact_header',
                        'type' => 'text'  
                    ]
            )
        );


        // Row Center

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
    
                'up_logo_header',
                    [
                        'label'=>'Logo Header',
                        'section' => 'up_header_section',
                        'settings' => 'up_logo_header',
                    ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_nome_escriorio',
                    [
                        'label'=>'Nome do Escritório',
                        'section' => 'up_header_section',
                        'settings' => 'up_nome_escriorio',
                        'type' => 'text'  
                    ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_endereco_escriorio',
                    [
                        'label'=>'Endereço Empresa',
                        'section' => 'up_header_section',
                        'settings' => 'up_endereco_escriorio',
                        'type' => 'textarea'  
                    ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_link_telefone',
                    [
                        'label'=>'Link do Telefone caso seja Whatsapp',
                        'section' => 'up_header_section',
                        'settings' => 'up_link_telefone',
                        'type' => 'text'  
                    ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_telefone',
                    [
                        'label'=>'Inserir Telefone',
                        'section' => 'up_header_section',
                        'settings' => 'up_telefone',
                        'type' => 'text'  
                    ]
            )
        );


        // Row Bottom
   


}