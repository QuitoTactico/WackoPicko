# Fluid Attacks Scanners - WackoPicko

## SAST Scanner

Escanear sin configuración:

```bash
docker pull fluidattacks/sast:latest
docker run --rm -v .:/app fluidattacks/sast:latest sast scan /app
```

Escanear con configuración (genera CSV):

```bash
docker run --rm -v .:/app fluidattacks/sast:latest sast scan /app/fluid-sast-config.yaml
```

## SCA Scanner

Escanear sin configuración:

```bash
docker pull fluidattacks/sca:latest
docker run --rm -v .:/app fluidattacks/sca:latest sca scan /app
```

Escanear con configuración (genera CSV):

```bash
docker run --rm -v .:/app fluidattacks/sca:latest sca scan /app/fluid-sca-config.yaml
```

## Output

Los archivos de configuración están en modo estricto (`strict: true`), lo que significa que el scanner fallará si encuentra vulnerabilidades, pero **siempre generará el reporte CSV**.

- **SAST**: Genera `sast-results.csv`
- **SCA**: Genera `sca-results.csv`

El CSV incluye:

- `title`: Nombre de la vulnerabilidad
- `cwe`: Common Weakness Enumeration
- `cvss_v4_score`: Puntuación de severidad
- `where`: Línea del archivo con el problema
- `snippet`: Fragmento de código vulnerable
- `method`: Método de detección usado

## Modo Estricto

Con `strict: true`, los scanners:

- ✅ Siempre generan el reporte CSV
- ❌ Fallan (exit code 1) si encuentran vulnerabilidades
- 🚫 Bloquean el pipeline en CI/CD
