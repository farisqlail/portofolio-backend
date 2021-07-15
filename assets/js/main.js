
if(localStorage.getItem('theme') == 'dark'){
  setDarkMode(true);
}

function setDarkMode() {
  let emoticon = '';
  let isDark = document.body.classList.toggle('darkmode');

  if(isDark){
    emoticon = '☀️';
    localStorage.setItem('theme', 'dark');
  } else {
    emoticon = '🌓';
    localStorage.removeItem('theme');
  }

  document.getElementById('darkBtn').innerHTML = emoticon;

}

