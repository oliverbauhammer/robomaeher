const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

var path = require('path');

// change these variables to fit your project
const jsPath= './assets/js';
const cssPath = './assets/scss';
const outputPath = 'dist';
const localDomain = 'http://localhost:8888/';
const entryPoints = {
  // 'app' is the output name, people commonly use 'bundle'
  // you can have more than 1 entry point
  'main': jsPath + '/main.js',
  'style': cssPath + '/style.scss'
};

module.exports = {
  entry: entryPoints,
  output: {
    path: path.resolve(__dirname, outputPath),
    filename: '[name].js',
  },
  resolve: {
    alias: {
      vue: 'vue/dist/vue.js'
    }
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name].css',
    }),

    // Uncomment this if you want to use CSS Live reload
    new BrowserSyncPlugin({
      proxy: localDomain,
      files: [ outputPath + '/*.css' ],
      injectCss: true,
    }, { reload: false, }),
  ],
  module: {
    rules: [
      {
        test: /\.s?[c]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader'
        ]
      },
      {
        test: /\.sass$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          {
            loader: 'sass-loader',
            options: {
              sassOptions: { indentedSyntax: true }
            }
          }
        ]
      },
      {
        test: /\.(jpg|jpeg|png|gif|woff|woff2|eot|ttf|svg)$/i,
        use: 'url-loader?limit=1024'
      },
    ]
  },
};