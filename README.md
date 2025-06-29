# Petz School

Plataforma educativa para el cuidado de mascotas.

## Sistema Implementado

### Sistema de Cursos
- 22 cursos organizados en inc/courses.json
- Renderizado centralizado via inc/course-renderer.php
- Paginas: programas, promociones, instructores

### Performance Condicional
- **Produccion**: HTML comprimido, Facebook tracking, Analytics
- **Desarrollo/Test**: Sin compresion, sin tracking, debug habilitado
- Deteccion automatica de entorno

### Facebook System
- 4 pixeles sincronizados
- API de conversiones con cookies
- Carga solo en produccion

## Comandos

```bash
# Desarrollo
npm run dev

# Produccion  
npm run build
```

## Estructura

- inc/performance-conditional.php - Sistema condicional
- inc/course-renderer.php - Renderizado de cursos
- inc/courses.json - Base de datos de cursos
- js/face.js - Facebook completo (4 pixeles + API)

## Entornos

- **Produccion**: Dominio real
- **Test**: localhost, .test, .local, ?test
