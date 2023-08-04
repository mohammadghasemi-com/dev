'use strict';
//set NODE_OPTIONS=--max-old-space-size=4096
const path = require('path');
const webpack=require('webpack');
const glob = require('glob-all');
const onlyGlob = require('glob');
const devMode = process.env.NODE_ENV !== "production";
const autoprefixer = require("autoprefixer");
const TerserPlugin = require("terser-webpack-plugin");
const PurgecssPlugin = require('purgecss-webpack-plugin')


const PATHS = {
    php: path.join(__dirname, 'resources/views'),
    js: path.join(__dirname, 'resources/template'),
    vue: path.join(__dirname, 'resources/template'),
    vue2: path.join(__dirname, 'resources/template/__component/__plugin/mg-search/component'),
    vue3: path.join(__dirname, 'resources/template/__component/__plugin/mg-modal'),
    vue4: path.join(__dirname, 'resources/template/__component/__plugin/mg-modal/component/mg_modal_default.vue'),
};
/*
*
*
*
*
* import plugin const
* */
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    externals: {
        // jquery: 'jQuery',
    },
    // stats: 'minimal',
    mode: "development",
    performance: { hints: false },
    optimization: {
        minimize: true,
        minimizer: [new TerserPlugin()],
    },
    entry: {
        // portal:'./resources/template/portal/__style.js',
        src:'./src/js/main.js',
    },
    output: {
        filename: "[name].js",
        path: path.resolve(__dirname,'dist'),
        clean: true
    },
    resolve: {
        alias: {
            /*'parchment': path.resolve(__dirname, 'node_modules/parchment/src/parchment.ts'),*/
/*            'appPath': path.resolve(__dirname, 'resources/template/js/public/appPath.js'),
            'vue$': 'vue',
            vue: 'vue/dist/vue.js',*/
        },
        extensions: ['.js','.jsx', '.ts','.vue', '.svg']
    },

    module: {
        rules: [
            /*
            *
            *
            *
            *
            * CSS-LOADER OR SASS-LOADER
            * */
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    // 'style-loader',
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            publicPath: '../',
                            /*reloadAll: true*/
                        }
                    },
                    "css-loader",
                    {
                        loader: 'postcss-loader',
                        /*options: {
                            sourceMap: true,
                            config: {
                                path: 'postcss.config.js'
                            }
                        }*/
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            /*sourceMap: true,*/
                            webpackImporter: false,
                            additionalData:'',
                            sassOptions: {
                                includePaths: ['./node_modules']
                            },
                            // Prefer Dart Sass
                            implementation: require('sass'),
                        }
                    }
                ],
            },



            /*
            *
            *
            *
            *
            *
            *
            * file loader
            * */
            {
                test: /\.(eot|ttf|woff|woff2)$/,
                exclude: /(quill)/,
                type: 'asset/resource',
                generator: {
                    filename: 'font/[name][ext][query]'
                }
            },
            {
                test: /\.(svg|png|jpe?g|gif)$/,
                exclude: /(quill)/,
                type: 'asset/resource',
                generator: {
                    filename: 'images/[name][ext][query]'
                }
            },

        ],
    },


    /*
    *
    *
    *
    * plugin
    *
    * */
    plugins: [
        /*new webpack.ProvidePlugin({
            $:'jquery/dist/jquery.min',
            jQuery: 'jquery/dist/jquery.min',
            'window.$':'jquery/dist/jquery.min',
            'window.jQuery': 'jquery/dist/jquery.min',
            'window.Vue': 'vue',
            Vue: 'vue',
            axios: 'axios',
        }),*/
        new MiniCssExtractPlugin({
            filename: 'css/[name].css',
            ignoreOrder: false,
        }),
        new webpack.LoaderOptionsPlugin({
            options: {
                postcss: [
                    autoprefixer()
                ]
            }
        }),
    ],

};
