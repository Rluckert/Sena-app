/*Cursos cortos por usuario*/
select curso from (select NombreCompleto, IdUsuario, IdCursoCortoSena, NombreCursoCorto curso from usuarios u , cursoscortossena cu, hojarutacursoscortousuario hoja
where u.IdUsuario = Usuarios_IdUsuario and 
CursosCortosSena_IdCursoCortoSena = IdCursoCortoSena) as sub 
where IdUsuario = 1;

/*Lista de deseos cargos por usuario*/

select cargo from (select NombreCargo cargo, u.IdUsuario 
from usuarios u, listadeseoscargousuario li, cargosempresa ca
where u.IdUsuario = li.IdUsuario  and
ca.IdCargoEmpresa = li.IdCargoEmpresa) as sub
where IdUsuario = 6;