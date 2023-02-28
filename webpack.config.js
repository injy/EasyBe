const path = require('path');
const json5 = require('json5');
const terserPlugin = require("terser-webpack-plugin");
const fileManagerPlugin = require('filemanager-webpack-plugin');
const miniCssExtractPlugin = require('mini-css-extract-plugin');
const cssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const CompressionPlugin = require("compression-webpack-plugin")
// const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin


module.exports = {
    mode: 'development',
    entry: './src/main.js',
    output: {
        filename: 'simple-memory.js',
        chunkFilename:'script/[name].[contenthash:8].js',
        path: path.resolve(__dirname, 'easybe'),
        clean: true,
        pathinfo: false,
    },
    experiments: {
        topLevelAwait: true,
    },
    plugins: [
        // new BundleAnalyzerPlugin({
            // analyzerMode: 'disabled',
            // generateStatsFile: true,
        // }),
        new fileManagerPlugin({
            events: {
                onEnd: {
                    copy: [
                        { source: './src/typecho/', destination: './easybe/' }
                    ],
                }
            }
        }),
        new miniCssExtractPlugin({
            filename: 'style/[name].[contenthash:8].css',
            chunkFilename:'style/[name].[contenthash:8].css',
            ignoreOrder: true

        }),
    ],
    // devtool: 'inline-source-map',
    optimization: {
        minimize: true,
        minimizer: [
            new terserPlugin({
                parallel: true,
                extractComments: false,
            }),
            new cssMinimizerPlugin(),
            new CompressionPlugin({
                algorithm: 'gzip',
                test: /\.js$|\.html$|\.css$/,
                minRatio: 1,
                threshold: 10240,
                deleteOriginalAssets: false,
            })
        ],
    },
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [
                    {
                        loader: miniCssExtractPlugin.loader,
                        options: {
                            publicPath: '../'
                        }
                    },
                    'css-loader',
                ],
            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                    {
                        loader: miniCssExtractPlugin.loader,
                        options: {
                            publicPath: '../'
                        }
                    },
                    'css-loader',
                    'sass-loader',
                ],
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif|webp)$/i,
                type: 'asset/resource',
                generator: {
                    filename: 'images/[contenthash][ext][query]'
                }
            },
            {
                test: /\.(eot|ttf|woff|woff2)$/,
                type: 'asset/resource',
                generator: {
                    filename: 'iconfont/[contenthash][ext][query]'
                }
            },
            {
                test: /\.json5$/i,
                type: 'json',
                parser: {
                    parse: json5.parse,
                },
            },
            {
                test: /\.html$/i,
                loader: 'html-loader',
                options: {
                    minimize: true,
                },
            },
        ],
    },
};
