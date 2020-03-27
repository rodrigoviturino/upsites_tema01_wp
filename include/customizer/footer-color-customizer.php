<?php 
// Footer informações das colunas

function up_color_footer_customizer( $wp_customize ) {
 
    // Settings 
        // Background Principal
        $wp_customize->add_setting( 'up_cor_principal_topo_footer', ['default' => "$blue" ]);
            // Borda Bottom
        $wp_customize->add_setting( 'up_cor_borda_about_footer', ['default' => "#495057" ]);

        // Icones Rede Social
        $wp_customize->add_setting( 'up_cor_icone_face_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_face_footer', ['default' => "#ffb600" ]);
        $wp_customize->add_setting( 'up_cor_icone_twitter_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_twitter_footer', ['default' => "#ffb600" ]);
        $wp_customize->add_setting( 'up_cor_icone_linkedin_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_linkedin_footer', ['default' => "#ffb600" ]);
        $wp_customize->add_setting( 'up_cor_icone_insta_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_insta_footer', ['default' => "#ffb600" ]);

        // Coluna About Background
        $wp_customize->add_setting( 'up_cor_principal_about_footer', ['default' => "$blue" ]);
            //  Empresa
        $wp_customize->add_setting( 'up_cor_titulo_empresa_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_link_empresa_footer', ['default' => "#dee2e6" ]);
        $wp_customize->add_setting( 'up_cor_simbolo_link_empresa_footer', ['default' => "#ffb600" ]);
            // Serviços
        $wp_customize->add_setting( 'up_cor_titulo_servico_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_link_servico_footer', ['default' => "#dee2e6" ]);
        $wp_customize->add_setting( 'up_cor_simbolo_link_servico_footer', ['default' => "#ffb600" ]);
            // Suporte
        $wp_customize->add_setting( 'up_cor_titulo_suporte_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_link_suporte_footer', ['default' => "#dee2e6" ]);
        $wp_customize->add_setting( 'up_cor_simbolo_link_suporte_footer', ['default' => "#ffb600" ]);
            // Localização
        $wp_customize->add_setting( 'up_cor_titulo_local_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_link_local_footer', ['default' => "#dee2e6" ]);
        $wp_customize->add_setting( 'up_cor_icone_local_footer', ['default' => "#ffb600" ]);
        // Copyright
        $wp_customize->add_setting( 'up_cor_fundo_copyright_footer', ['default' => "#0a2c4e" ]);
        $wp_customize->add_setting( 'up_cor_borda_fundo_copyright_footer', ['default' => "#495057" ]);
        $wp_customize->add_setting( 'up_cor_texto_copyright_footer', ['default' => "#fff" ]);
        $wp_customize->add_setting( 'up_cor_empresa_copyright_footer', ['default' => "#ffb600" ]);
        $wp_customize->add_setting( 'up_cor_hover_empresa_copyright_footer', ['default' => "#dee2e6" ]);


    //Sections
    $wp_customize->add_section('up_color_footer_section', [
        'title' => 'Footer - Cores ',
        'priority' => 4
    ]);


    //Controllers 

    // Color Background
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_principal_topo_footer',
            [
                'label' => 'Cor Fundo Topo Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_principal_topo_footer',
            ]
        )
    );
    // Borda
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_borda_about_footer',
            [
                'label' => 'Cor Borda Fundo Topo Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_borda_about_footer',
            ]
        )
    );

    // Rede Social
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_face_footer',
            [
                'label' => 'Cor Icone Facebook Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_face_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_face_footer',
            [
                'label' => 'Cor Hover Icone Facebook Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_face_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_twitter_footer',
            [
                'label' => 'Cor Icone Twitter Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_twitter_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_twitter_footer',
            [
                'label' => 'Cor Hover Icone Twitter Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_twitter_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_linkedin_footer',
            [
                'label' => 'Cor Icone Linkedin Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_linkedin_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_linkedin_footer',
            [
                'label' => 'Cor Hover Icone Linkedin Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_linkedin_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_insta_footer',
            [
                'label' => 'Cor Icone Instagram Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_insta_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_insta_footer',
            [
                'label' => 'Cor Hover Icone Instagram Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_insta_footer',
            ]
        )
    );

    // Sessão About
    // Cor Principal About
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_principal_about_footer',
            [
                'label' => 'Cor Fundo Sobre Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_principal_about_footer',
            ]
        )
    );
    // Empresa
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_empresa_footer',
            [
                'label' => 'Cor Titulo Sobre Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_empresa_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_link_empresa_footer',
            [
                'label' => 'Cor Link dos itens Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_link_empresa_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_simbolo_link_empresa_footer',
            [
                'label' => 'Cor Simbolo dos itens Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_simbolo_link_empresa_footer',
            ]
        )
    );
    
    // Coluna Serviço
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_servico_footer',
            [
                'label' => 'Cor Titulo Serviço',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_servico_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_link_servico_footer',
            [
                'label' => 'Cor Link itens do Serviço',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_link_servico_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_simbolo_link_servico_footer',
            [
                'label' => 'Cor Simbolo itens do Serviço',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_simbolo_link_servico_footer',
            ]
        )
    );

    // Coluna Suporte
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_suporte_footer',
            [
                'label' => 'Cor Titulo Suporte',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_suporte_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_link_suporte_footer',
            [
                'label' => 'Cor Link itens do Suporte',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_link_suporte_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_simbolo_link_suporte_footer',
            [
                'label' => 'Cor Simbolo itens do Suporte',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_simbolo_link_suporte_footer',
            ]
        )
    );

    // Coluna Localização
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_local_footer',
            [
                'label' => 'Cor Titulo Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_local_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_link_local_footer',
            [
                'label' => 'Cor Link itens do Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_link_local_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_local_footer',
            [
                'label' => 'Cor Icone da Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_local_footer',
            ]
        )
    );
    // Copyright
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_copyright_footer',
            [
                'label' => 'Cor Fundo Principal do copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_fundo_copyright_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_borda_fundo_copyright_footer',
            [
                'label' => 'Cor Borda Fundo Principal do copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_borda_fundo_copyright_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_copyright_footer',
            [
                'label' => 'Cor Texto do copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_texto_copyright_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_empresa_copyright_footer',
            [
                'label' => 'Cor Nome da Empresa copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_empresa_copyright_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_empresa_copyright_footer',
            [
                'label' => 'Cor Hover Nome da Empresa copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_empresa_copyright_footer',
            ]
        )
    );


}