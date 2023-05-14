const path = require('path');

module.exports = {
    entry: './resources/js/app.js', // Plik wejściowy JavaScript
    output: {
        path: path.resolve(__dirname, 'public/js'), // Katalog wyjściowy dla skompilowanego pliku JavaScript
        filename: 'app.js' // Nazwa skompilowanego pliku JavaScript
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    'style-loader',
                    'css-loader'
                ]
            }
        ]
    }
};
