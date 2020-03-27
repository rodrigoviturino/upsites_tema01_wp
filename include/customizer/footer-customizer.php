<?php 
// Footer informações das colunas

function up_footer_customizer( $wp_customize ) {
 
    // Settings 
        // Logo
    $wp_customize->add_setting( 'up_logo_footer', [ 'default' => "" ]);
    
    // Informações
    $wp_customize->add_setting( 'up_title_menu', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_title_courses', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_title_topics', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_title_info', [ 'default' => "" ]);

    $wp_customize->add_setting( 'up_copyright', [ 'default' => "" ]);

        // Rede social Footer
    $wp_customize->add_setting('up_facebook_footer', ['default' => '']);
    $wp_customize->add_setting('up_twitter_footer', ['default' => '']);
    $wp_customize->add_setting('up_linkedin_footer', ['default' => '']);
    $wp_customize->add_setting('up_instagram_footer', ['default' => '']);
    
    // Coluna
    $wp_customize->add_setting('up_title_empresa', ['default' => '']);
    $wp_customize->add_setting('up_title_servicos', ['default' => '']);
    $wp_customize->add_setting('up_title_suporte', ['default' => '']);
        // Localização
    $wp_customize->add_setting('up_title_local', ['default' => '']);
    $wp_customize->add_setting('up_link_address_local', ['default' => '']);
    $wp_customize->add_setting('up_text_address_local', ['default' => '']);
        // Imagem Mapa
    $wp_customize->add_setting('up_image_map', ['default' => '']);
    $wp_customize->add_setting('up_desc_image_mapa', ['default' => '']);
    // Copyright
    $wp_customize->add_setting('up_company_copyright', ['default' => '']);
    $wp_customize->add_setting('up_link_company_copyright', ['default' => '']);

    //Sections
    $wp_customize->add_section('up_footer_section', [
        'title' => 'Footer - Infos',
        'priority' => 2
    ]);

    //Controllers 
    $wp_customize->add_control(
        new WP_Customize_Image_Control (
            $wp_customize,

            'up_logo_footer',
            [
                'label' => 'Logo Footer',
                'section' => 'up_footer_section',
                'settings' => 'up_logo_footer',
            ]
        )
    );


        // Coluna Empresa
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_title_empresa',
                [
                    'label' => 'Titulo Coluna Empresa',
                    'section' => 'up_footer_section',
                    'settings' => 'up_title_empresa',
                    'type' => 'text' ,
                ]
            )
        );
    
        // Coluna Serviços
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_title_servicos',
                [
                    'label' => 'Titulo Coluna Serviços',
                    'section' => 'up_footer_section',
                    'settings' => 'up_title_servicos',
                    'type' => 'text' ,
                ]
            )
        );
    
        // Coluna Suporte
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_title_suporte',
                [
                    'label' => 'Titulo Coluna Suporte',
                    'section' => 'up_footer_section',
                    'settings' => 'up_title_suporte',
                    'type' => 'text' ,
                ]
            )
        );
    
        // Coluna Localização
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_title_local',
                [
                    'label' => 'Titulo Coluna Localização',
                    'section' => 'up_footer_section',
                    'settings' => 'up_title_local',
                    'type' => 'text' ,
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_link_address_local',
                [
                    'label' => 'Link do Google Maps',
                    'section' => 'up_footer_section',
                    'settings' => 'up_link_address_local',
                    'type' => 'text' ,
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_text_address_local',
                [
                    'label' => 'Texto Endereço Localização',
                    'section' => 'up_footer_section',
                    'settings' => 'up_text_address_local',
                    'type' => 'textarea' ,
                ]
            )
        );
 
    
    // Rede Social Footer
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_facebook_footer',
            [
                'label' => 'Link do Facebook',
                'section' => 'up_footer_section',
                'settings' => 'up_facebook_footer',
                'type' => 'text' ,
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_twitter_footer',
            [
                'label' => 'Link do Twitter',
                'section' => 'up_footer_section',
                'settings' => 'up_twitter_footer',
                'type' => 'text' ,
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_linkedin_footer',
            [
                'label' => 'Link do Linkedin',
                'section' => 'up_footer_section',
                'settings' => 'up_linkedin_footer',
                'type' => 'text' ,
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_instagram_footer',
            [
                'label' => 'Link do Instagram',
                'section' => 'up_footer_section',
                'settings' => 'up_instagram_footer',
                'type' => 'text' ,
            ]
        )
    );

    // Image Map
    $wp_customize->add_control(
        new WP_Customize_Image_Control (
            $wp_customize,

            'up_image_map',
            [
                'label' => 'Imagem do Mapa',
                'section' => 'up_footer_section',
                'settings' => 'up_image_map',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_desc_image_mapa',
            [
                'label' => 'Descrição da Imagem do Mapa',
                'section' => 'up_footer_section',
                'settings' => 'up_desc_image_mapa',
                'type' => 'text'
            ]
        )
    );

    // Copyright
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_company_copyright',
            [
                'label' => 'Nome da Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_company_copyright',
                'type' => 'text'
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_link_company_copyright',
            [
                'label' => 'Link do Website da Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_link_company_copyright',
                'type' => 'text'
            ]
        )
    );
    

}