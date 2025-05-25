const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = (env, argv) => {
    const isProduction = argv.mode === 'production';

    return {
        entry: {
            landingdev: [
                './js/lite-vimeo.js',
                './js/custom-landing.js',
                './js/landing.js',
                './scss/styles.scss'
            ],
            landing: [
                './js/lite-vimeo.js',
                './js/custom-landing.js',
                './js/landing.js',
                './js/preventkeys-min.js',
                './js/analitica.js',
                './scss/styles.scss'
            ],
            landingdevcritical: [
                './js/lite-vimeo.js',
                './js/custom-landing.js',
                './js/landing.js',
                './scss/critic.scss'
            ],
            landingcritical: [
                './js/lite-vimeo.js',
                './js/custom-landing.js',
                './js/landing.js',
                './js/preventkeys-min.js',
                './js/analitica.js',
                './scss/critic.scss'
            ]
        },
        output: {
            filename: '[name].bundle.js',
            path: path.resolve(__dirname, 'dist')
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    }
                },
                {
                    test: /\.scss$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        'css-loader',
                        'sass-loader'
                    ]
                }
            ]
        },
        plugins: [
            new MiniCssExtractPlugin({
                filename: '[name].bundle.css'
            }),
            new CleanWebpackPlugin() // Cleans the /dist folder each build
        ],
        optimization: {
            minimize: !isProduction ? true : true, // Minimize in all modes
            minimizer: [new TerserPlugin(), new CssMinimizerPlugin()],
        },
        devtool: isProduction ? 'source-map' : 'inline-source-map',
        resolve: {
            alias: {
                jquery: path.resolve(__dirname, 'node_modules/jquery/dist/jquery.js')
            },
            extensions: ['.js', '.jsx', '.scss','css']
        },
        mode: 'development' // Or dynamic based on `isProduction`
    };
};
