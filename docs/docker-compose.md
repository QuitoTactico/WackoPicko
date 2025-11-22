# Docker Compose - WackoPicko

## Iniciar aplicación

```bash
docker-compose up -d
```

## Ver logs

```bash
docker-compose logs -f
```

## Detener aplicación

```bash
docker-compose down
```

## Reiniciar desde cero (borra base de datos)

```bash
docker-compose down -v
docker-compose up -d
```

## Acceder

<http://localhost:8080>

Usuarios:

- Admin: `admin/admin`
- Usuario: `scanner1/scanner1`
