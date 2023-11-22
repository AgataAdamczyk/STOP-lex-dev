const path = require('path');
const webpack = require('webpack');
const { resolve } = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

// STYLES
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

// IMAGES
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const LastCallPlugin = require('last-call-webpack-plugin');

module.exports = (env, argv) => {
  const settings = {
    mode: 'development',
    entry: './_src/index.js',
    output: {
      path: path.resolve(__dirname, 'assets'),
      publicPath: "/wp-content/themes/stop-lex-dev/assets/",
    },
    module: {
      rules: [
        {
          test: /\.s?css$/,
          use: [
            MiniCssExtractPlugin.loader,
            {
              loader: 'css-loader',
              options: {
                url: false,
                importLoaders: 1,
                sourceMap: true
              }
            },
            {
              loader: 'postcss-loader',
              options: {
                postcssOptions: {
                  plugins: [
                    [
                      'postcss-preset-env',
                      {
                        autoprefixer: { grid: true },
                      },
                    ],
                  ],
                },
                sourceMap: true
              }
            },
            {
              loader: 'sass-loader',
              options: {
                sourceMap: true
              }
            },
          ]
        },
        {
          test: /\.m?js$/,
          exclude: /(node_modules|bower_components)/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env']
            }
          }
        }
      ]
    },
    plugins: [
      new webpack.ProgressPlugin(),
      new MiniCssExtractPlugin({
        filename: "main.css",
      }),
      new webpack.ProvidePlugin({
        $: "jquery",
        jQuery: "jquery"
      })
    ]
  };

  // DEVELOPMENT
  if (argv.mode === 'development') {
    settings.devtool = "inline-source-map";
  }

  // PRODUCTION
  if (argv.mode === 'production') {
    settings.performance = {
      hints: false
    };

    settings.devtool = 'source-map';
  }

  // STATIC
  if (env) {
    if (env.static) {
      settings.entry = './_src/dummy.js',
          settings.output = {
            path: path.resolve(__dirname, 'assets'),
            publicPath: "/wp-content/themes/stop-lex-dev/assets/",
            filename: 'dummy.js'
          },
          settings.plugins.push(
              new CleanWebpackPlugin({
                cleanOnceBeforeBuildPatterns: [
                  "**/*",
                  "!main.css",
                  "!main.js"
                ]
              }),
              new CopyWebpackPlugin({
                patterns: [
                  { from: './_src/images', to: 'images', noErrorOnMissing: true },
                  { from: './_src/fonts', to: 'fonts', noErrorOnMissing: true },
                ]
              })
          );
      settings.plugins.push(
          new ImageminPlugin({
            test: /\.(jpe?g|png|gif|svg)$/i,
            gifsicle: {
              interlaced: true,
              optimizationLevel: 3,
            },
            jpegtran: { progressive: true },
            optipng: { optimizationLevel: 5 },
          })
      );
    }

    if (env.hotreaload) {
      settings.plugins.push(
          new BrowserSyncPlugin({
            files: '**/*.php',
            proxy: 'https://stop-lex-dev.loc'
          })
      );
    }
  }

  return settings;
};
