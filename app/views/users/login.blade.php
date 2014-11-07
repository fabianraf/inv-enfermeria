
ALTER SEQUENCE usuarios_id_seq RESTART WITH 576;
ALTER SEQUENCE alimentos_id_seq RESTART WITH 126;
ALTER SEQUENCE alimentos_bares_id_seq RESTART WITH 167;

pg_dump -U postgres -O -a -t usuarios inv_enfermeria -f "/root/Desktop/usuarios.sql"
psql -U postgres -a -d inv_enfermeria -f "/root/Desktop/usuarios.sql"
psql -U postgres -a -d inv_enfermeria -f "/root/Desktop/alimentos.sql"
psql -U postgres -a -d inv_enfermeria -f "/root/Desktop/alimentos_bares.sql"