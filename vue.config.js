module.exports = {
  pages: {
    index: {
      entry: './src/pages/Home/main.js',
      template: 'public/index.html',
      title: 'Home',
      chunks: ['chunk-vendors', 'chunk-common', 'index'],
    },
    schedule: {
      entry: './src/pages/Schedule/main.js',
      template: 'public/index.html',
      title: 'Schedule',
      chunks: ['chunk-vendors', 'chunk-common', 'schedule'],
    },
  },
};
