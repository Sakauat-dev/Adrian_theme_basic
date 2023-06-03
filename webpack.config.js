const webpack = require("webpack");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const TerserPlugin = require("terser-webpack-plugin");

const config = {
  entry: {
    adrian: ["./src/js/adrian.js", "./src/sass/adrian.scss"],
  },
  output: {
    path: path.resolve(__dirname, "assets"),
    filename: "js/[name].min.js",
    clean: true,
  },
  devtool: "source-map",
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
      {
        test: /\.js$/,
        use: "babel-loader",
        exclude: /node_modules/,
      },
      {
        test: /\.(jpe?g|png|gif|svg)$/,
        type: "asset",
        generator: {
          filename: "./image/[name][ext]",
        },
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "style/[name].min.css",
    }),
    new TerserPlugin({
      extractComments: false,
      terserOptions: {
        format: {
          comments: false,
        },
        mangle: {
          keep_fnames: false,
          keep_classnames: false,
        },
      },
    }),
  ],
};

module.exports = config;
