/*Cursos cortos por usuario*/
select NombreCompleto, IdUsuario, IdCursoCortoSena, NombreCursoCorto curso 
from usuarios u , cursoscortossena cu, hojarutacursoscortousuario hoja
where u.IdUsuario = Usuarios_IdUsuario and 
CursosCortosSena_IdCursoCortoSena = IdCursoCortoSena and IdUsuario = 1;

/*Cargos por curso*/
select NombreCursoCorto, NombreCargo 
from cursoscortossena cuse, cursoscortocargo cucar, cargosempresa ca
where cuse.IdCursoCortoSena = cucar.IdCursoCorto and
ca.IdCargoEmpresa = cucar.IdCargoEmpresa;



/*Lista de deseos cargos por usuario*/
select NombreCargo cargo, u.IdUsuario 
from usuarios u, listadeseoscargousuario li, cargosempresa ca
where u.IdUsuario = li.IdUsuario  and
ca.IdCargoEmpresa = li.IdCargoEmpresa and u.IdUsuario = 2;