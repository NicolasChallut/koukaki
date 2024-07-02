
document.querySelectorAll('.animated-title').forEach(title => {
    const letters = title.textContent.split('');
    title.textContent = '';
    letters.forEach(letter => {
      const span = document.createElement('span');
      span.textContent = letter;
      title.appendChild(span);
    });
  });