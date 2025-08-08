fetch('http://localhost/PIC/users/login', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    username: 'sistemasSMS',
    password: 'Sistemas@2025'
  })
})
.then(res => res.json())
.then(data => {
  if (data.success) {
    // Guardar token en localStorage para usar con la API
    localStorage.setItem('token', data.token);

    // Redirigir a vista protegida
    window.location.href = 'http://localhost/PIC/users/home';  // Por ejemplo
  } else {
    alert(data.message);
  }
});
