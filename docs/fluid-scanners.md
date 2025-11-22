# Fluid Attacks Scanners - WackoPicko

## SAST Scanner

Escanear sin configuración:

```bash
docker pull fluidattacks/sast:latest
docker run --rm -v .:/app fluidattacks/sast:latest sast scan /app
```

Escanear con configuración (genera CSV):

```bash
docker run --rm -v .:/app fluidattacks/sast:latest sast scan /app/fluid-config.yaml
```

## SCA Scanner

Escanear sin configuración:

```bash
docker pull fluidattacks/sca:latest
docker run --rm -v .:/app fluidattacks/sca:latest sca scan /app
```

Escanear con configuración (genera CSV):

```bash
docker run --rm -v .:/app fluidattacks/sca:latest sca scan /app/fluid-config.yaml
```

## Output

El archivo de configuración `fluid-config.yaml` está configurado para generar resultados en formato CSV en `scan-results.csv`.

El CSV incluye:

- `title`: Nombre de la vulnerabilidad
- `cwe`: Common Weakness Enumeration
- `cvss_v4_score`: Puntuación de severidad
- `where`: Línea del archivo con el problema
- `snippet`: Fragmento de código vulnerable
- `method`: Método de detección usado
