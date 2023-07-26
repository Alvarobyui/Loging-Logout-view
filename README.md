Proyecto de validación y vista para inicio de sesión y registro.
Autor:
Alvaro Diaz

Detalles:
Por ahora está implementada la vista para registrarse.
Cuando uno registra un nuevo correo y quiere saber si fue exitoso, debe fijarse en la barra de direcciones o URLs.

Registro exitoso:
./login.php?login?success

Errores o ingresos inválidos:
index.php?error=invalidmail="email"
index.php?error=usertaken&mail="email_ingresado"
y otros...