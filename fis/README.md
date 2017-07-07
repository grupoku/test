HITO 3 - Fundamentos de Ingieneria de Software
==============================================
	Sistema autonomo para reservas de canchas en recinto deporitov Recoleta 
desarrollado con el framework CodeIgniter v3.

¿En el sistema como se resuelve el requisito no funcional de seguridad?

Para proteger los datos tanto de los usuarios (nombre, telefono y contraseña) como
del recinto deportivo (canchas, horarios, precios, etc) se recurre a almacenar dicha 
información en una base de datos externa a la aplicación, pudiendo esta, estar alojada
en el mismo o en otro servidor, de manera que los datos sólo se conocen mediante las 
consultas sql, en donde cada usuario tiene acceso sólo a sus datos y no a todos los 
demás, por lo que la aplicacion no entregará datos adicionales al navegador web que 
esté consultando.

¿En el sistema como se resuelve el requisito no funcional que soporte distintos
motores de bd?

La aplicación al estar desarrollada con el framework CodeIgniter, cada consulta sql y cada
conexion a la base de datos, se realiza mediante las librerías que ofrece el framework, y este
a su vez al configurarse, permite realizar la conexión a una base de datos mediante distintos
motores de bd (sqlite,mysql,postgreeSQL).

¿En el sistema como se resuelve el requisito no funcional de escalabilidad?

Con las herramientas entregadas por el framework, y al  utilizar una técnica de MVC, ofrece mayor
flexibilidad a la hora de añadir una nueva funcionalidad, ya que al tratarse de MVC, permite distribuir
de mejor manera cada componente dentro de la aplicación, por lo que a la hora de realizar una modificación
es más cómodo y rápido para hacer un cambio en el sistema.

AUTORES
=======
Felipe Duve, felipe.duve@alumnos.uv.cl (ward)
Hugo Mancilla, hugo.mancilla@alumnos.uv.cl (carry)
Javier Pizarro, javier.pizarro@alumnos.uv.cl (support)
Hong Xiang, hong.xiang@alumnos.uv.cl (minion)

DATOS DE PRUEBA PARA HITO3
==========================

LOGIN
Nombre de usuario:Francisco
Password:1234
Nombre de usuario:Hugo
Password:123
Nombre de usuario:Javier
Password:321

DATABASE
Database:arriendos
User:root
Pass:""