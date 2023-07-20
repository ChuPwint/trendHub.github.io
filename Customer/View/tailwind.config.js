/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['*.{html,js,php}'],
  theme: {
    extend: {
colors: {
      'primary' : '#FFFAFA',
      'secondary' : '#E4E4D2',
      'tertiary' : '#F36823',
      'textRed'  : "#FF0000",
      'buttonColor' : '#d74f0c',
      'textWhite' : "#FFFFFF",  
      'textBlack' : "#000000",
      'textOrange': "#F36823",
      'textGray' : "#A2A2A2",
      'orangeHover' : "",
},
fontFamily: {
  'roboto' : ['Roboto', 'sans-serif'],
 },
    },
  },
  plugins: [],
};
