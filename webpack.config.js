const path = require('path')
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const extractSASS = new ExtractTextPlugin('bundle.css')

module.exports = {
  entry: './R/js/index.js',
  output: {
    path: path.resolve(__dirname, 'R'),
    filename: 'bundle.js'
  },
  devtool: 'source-map',
  module: {
    rules: [{
      test: /\.scss$/,
      use: extractSASS.extract(['css-loader', 'sass-loader'])
    }, {
      test: /\.js$/,
      exclude: /(node_modules|bower_components)/,
      use: {
        loader: 'babel-loader',
        options: {
          presets: [ '@babel/preset-env' ]
        }
      }
    }]
  },
  plugins: [
    new UglifyJsPlugin ({
      sourceMap: true
    }),
    extractSASS
  ]
}
