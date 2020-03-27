<?php 
// Footer informações das colunas

function up_color_header_customizer( $wp_customize ) {
 
    // Settings 
        // Row Top
        //Background Topo
        $wp_customize->add_setting( 'up_cor_fundo_rowTop_header', ['default' => "linear-gradient(135deg,#222 26%,#222 75%,#eba800 75%)" ]);
            // Rede Social
            $wp_customize->add_setting( 'up_cor_icone_face_header', ['default' => "#f8f9fa" ]);
            $wp_customize->add_setting( 'up_cor_hover_icone_face_header', ['default' => "#ffb600" ]);
            $wp_customize->add_setting( 'up_cor_icone_twitter_header', ['default' => "#f8f9fa" ]);
            $wp_customize->add_setting( 'up_cor_hover_icone_twitter_header', ['default' => "#ffb600" ]);
            $wp_customize->add_setting( 'up_cor_icone_insta_header', ['default' => "#f8f9fa" ]);
            $wp_customize->add_setting( 'up_cor_hover_icone_insta_header', ['default' => "#ffb600" ]);
            $wp_customize->add_setting( 'up_cor_icone_linkedin_header', ['default' => "#f8f9fa" ]);
            $wp_customize->add_setting( 'up_cor_hover_icone_linkedin_header', ['default' => "#ffb600" ]);
            // Link Contact
            $wp_customize->add_setting( 'up_cor_link_contact_header', ['default' => "$gray-100" ]);
            $wp_customize->add_setting( 'up_cor_hover_link_contact_header', ['default' => "$gray-300" ]);
        // Row Center
            $wp_customize->add_setting( 'up_cor_menu_responsive_header', ['default' => "$white" ]);

            $wp_customize->add_setting( 'up_cor_item_menu_header', ['default' => "$white" ]);
            // $wp_customize->add_setting( 'up_cor_hover_item_menu_header', ['default' => "#9c904d" ]);

            $wp_customize->add_setting( 'up_cor_icone_shop_header', ['default' => "#ffb600" ]);
            $wp_customize->add_setting( 'up_cor_hover_icone_shop_header', ['default' => "#9c904d" ]);

            $wp_customize->add_setting( 'up_cor_icone_search_header', ['default' => "#ffb600" ]);
            $wp_customize->add_setting( 'up_cor_hover_icone_search_header', ['default' => "#9c904d" ]);

        // Row Bottom


        $wp_customize->add_setting( 'up_cor_icone_telefone_header', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_texto_telefone_header', ['default' => "#495057" ]);
        $wp_customize->add_setting( 'up_cor_icone_email_header', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_texto_email_header', ['default' => "#495057" ]);
        $wp_customize->add_setting( 'up_cor_icone_local_header', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_texto_local_header', ['default' => "#495057" ]);
        // Botão Header
        $wp_customize->add_setting( 'up_cor_btn_atendimento_header', ['default' => "#e16297" ]);
        $wp_customize->add_setting( 'up_cor_texto_btn_atendimento_header', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_icon_btn_atendimento_header', ['default' => "#FFF" ]);
        
        // Row Menu
        $wp_customize->add_setting( 'up_cor_fundo_rowMenu_header', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_texto_item_menu_header', ['default' => "#1e2228" ]);
        $wp_customize->add_setting( 'up_cor_hover_texto_item_menu_header', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_icon_search_header', ['default' => "#e16297" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_search_header', ['default' => "$cyan" ]);




    //Sections
    $wp_customize->add_section('up_color_header_section', [
        'title' => 'Header - Cores ',
        'priority' => 2
    ]);


    //Controllers 
        // Row Top
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_rowTop_header',

            [
                'label' => 'Cor do fundo Topo',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_fundo_rowTop_header',
            ]
        )
    );
    // Rede Social
        // Facebook
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icone_face_header',
                [
                    'label' => 'Cor icone Facebook',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_icone_face_header',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icone_face_header',
                [
                    'label' => 'Cor Hover icone Facebook',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_hover_icone_face_header',
                ]
            )
        );
        // Twitter
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icone_twitter_header',
                [
                    'label' => 'Cor icone Twitter',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_icone_twitter_header',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icone_twitter_header',
                [
                    'label' => 'Cor Hover icone Twitter',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_hover_icone_twitter_header',
                ]
            )
        );
        // Instagram
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icone_insta_header',
                [
                    'label' => 'Cor icone Instagram',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_icone_insta_header',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icone_insta_header',
                [
                    'label' => 'Cor Hover icone Instagram',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_hover_icone_insta_header',
                ]
            )
        );
        // Linkedin
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icone_linkedin_header',
                [
                    'label' => 'Cor icone Linkedin',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_icone_linkedin_header',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icone_linkedin_header',
                [
                    'label' => 'Cor Hover icone Linkedin',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_hover_icone_linkedin_header',
                ]
            )
        );
        // Link Contact
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_link_contact_header',
                [
                    'label' => 'Cor Link Contact Header',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_link_contact_header',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_link_contact_header',
                [
                    'label' => 'Cor Hover Link Contact Header',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_hover_link_contact_header',
                ]
            )
        );
        
    // Row Center
    // Menu Responsivo 
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_menu_responsive_header',
                [
                    'label' => 'Cor Menu Responsivo Header',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_menu_responsive_header',
                ]
            )
        );
        // Icone Shop Cart
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icone_shop_header',
                [
                    'label' => 'Cor Icone Carrinho Header',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_icone_shop_header',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icone_shop_header',
                [
                    'label' => 'Cor Hover Icone Carrinho Header',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_hover_icone_shop_header',
                ]
            )
        );



    // Cor Icone Telefone
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_telefone_header',

            [
                'label' => 'Cor do icone do telefone',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_telefone_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_telefone_header',

            [
                'label' => 'Cor da texto do telefone',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_texto_telefone_header',
            ]
        )
    );
    // Cor Icone Email
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_email_header',

            [
                'label' => 'Cor do icone do email',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_email_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_email_header',

            [
                'label' => 'Cor da texto do email',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_texto_email_header',
            ]
        )
    );
    // Cor Icone Local
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_local_header',

            [
                'label' => 'Cor do icone do local',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_local_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_local_header',

            [
                'label' => 'Cor da texto do local',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_texto_local_header',
            ]
        )
    );
    // Botão Topo
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_btn_atendimento_header',

            [
                'label' => 'Cor do Botão Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_btn_atendimento_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_btn_atendimento_header',

            [
                'label' => 'Cor do Texto Botão Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_texto_btn_atendimento_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icon_btn_atendimento_header',

            [
                'label' => 'Cor do Icone Botão Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icon_btn_atendimento_header',
            ]
        )
    );

    // Row Menu
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_rowMenu_header',

            [
                'label' => 'Cor de Fundo Menu Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_fundo_rowMenu_header',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_item_menu_header',

            [
                'label' => 'Cor do Texto Menu Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_texto_item_menu_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_texto_item_menu_header',

            [
                'label' => 'Cor do Hover Texto Menu Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_hover_texto_item_menu_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icon_search_header',

            [
                'label' => 'Cor do Icone da Lupa do Menu',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icon_search_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icon_search_header',

            [
                'label' => 'Cor do Hover Icone da Lupa do Menu',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_hover_icon_search_header',
            ]
        )
    );




}