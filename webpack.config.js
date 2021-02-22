const path = require('path');
const { CleanWebpackPlugin } = require("clean-webpack-plugin");

module.exports = {
  mode:'development',
  entry: './script/index.js',
  output: {
    filename: 'bundle.min.js',
    path: path.resolve(__dirname, 'dist'),
  },
  resolve: {
    extensions: [ '.tsx', '.ts', '.js' ],
  },
  module: {
    rules: [
      {
        test: /\.tsx?$/,
        use: 'ts-loader',
        exclude: /node_modules/,
      },
      {
        test: /\.s[ac]ss$/i,
        use: [
          'style-loader',
          'css-loader',
          'sass-loader',
        ]
      }
    ],
  },
  plugins:[new CleanWebpackPlugin()]
}