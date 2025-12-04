# Sistema de Gestión de Papelería

Sistema completo de gestión para papelerías desarrollado en PHP, HTML, CSS y JavaScript.

## Características Principales

- **Autenticación Completa**: Login, registro, edición de perfil
- **Dashboard Interactivo**: Estadísticas en tiempo real
- **Gestión de Productos**: CRUD completo con búsqueda y paginación
- **Módulos Completos**: Ventas, compras, clientes, proveedores, stock, etc.
- **Validación de Sesiones**: Control de acceso por roles
- **Diseño Responsive**: Interfaz moderna adaptable a dispositivos móviles
- **Iconos Font Awesome**: Interfaz visual profesional

## Requisitos

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Servidor web (Apache, Nginx)
- Extensiones PHP: mysqli, session

## Instalación

1. **Clonar o descargar el proyecto**

2. **Configurar la base de datos**
   - Crear una base de datos MySQL llamada `papeleriaventasdb`
   - Importar el archivo SQL adjunto `papeleriaventasdb.sql`
   - Ejecutar el script `scripts/create_admin_user.sql` para crear usuarios de prueba

3. **Configurar credenciales**
   - Editar `config/database.php`
   - Actualizar las credenciales de la base de datos:
     \`\`\`php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root');
     define('DB_PASS', '');
     define('DB_NAME', 'papeleriaventasdb');
     \`\`\`

4. **Iniciar el servidor**
   - Colocar el proyecto en la carpeta del servidor web (htdocs, www, etc.)
   - Acceder a través del navegador: `http://localhost/nombre-proyecto/`

## Credenciales de Acceso

### Usuario Administrador
- **Usuario**: admin
- **Contraseña**: admin123

### Usuario Cajero
- **Usuario**: cajero1
- **Contraseña**: admin123

## Estructura del Proyecto

\`\`\`
/
├── auth/                    # Autenticación
│   ├── login.php
│   ├── register.php
│   └── logout.php
├── config/                  # Configuración
│   ├── database.php
│   └── session.php
├── dashboard/               # Panel principal
│   └── index.php
├── includes/                # Componentes compartidos
│   ├── header.php
│   └── sidebar.php
├── modules/                 # Módulos del sistema
│   ├── productos/
│   ├── clientes/
│   ├── ventas/
│   ├── compras/
│   └── ...
├── profile/                 # Perfil de usuario
│   └── edit.php
├── assets/                  # Recursos estáticos
│   ├── css/
│   └── js/
├── scripts/                 # Scripts SQL
│   └── create_admin_user.sql
└── index.php               # Punto de entrada
\`\`\`

## Módulos Disponibles

- **Ventas**: Gestión de ventas y facturación
- **Clientes**: Administración de clientes
- **Productos**: Catálogo de productos
- **Categorías**: Clasificación de productos
- **Stock**: Control de inventario
- **Compras**: Gestión de compras a proveedores
- **Proveedores**: Base de datos de proveedores
- **Usuarios**: Administración de usuarios del sistema
- **Roles**: Control de permisos
- **Sucursales**: Gestión de múltiples sucursales
- **Impuestos**: Configuración de impuestos
- **Métodos de Pago**: Formas de pago disponibles
- **Unidades de Medida**: Unidades para productos

## Características Técnicas

### Seguridad
- Contraseñas hasheadas con `password_hash()`
- Validación de sesiones en cada página
- Prepared statements para prevenir SQL injection
- Validación de datos en frontend y backend

### Interfaz
- Diseño responsive con CSS puro
- Iconos de Font Awesome 6.4
- Alertas auto-ocultables
- Sidebar colapsable
- Búsqueda y paginación en listados

### Base de Datos
- Arquitectura normalizada
- Relaciones con integridad referencial
- Soporte para múltiples sucursales
- Sistema de auditoría con timestamps

## Uso

1. **Iniciar Sesión**: Acceder con las credenciales proporcionadas
2. **Dashboard**: Visualizar estadísticas principales
3. **Gestión de Productos**: Crear, editar o inactivar productos
4. **Registrar Ventas**: Procesar ventas desde el módulo correspondiente
5. **Reportes**: Consultar ventas recientes y productos más vendidos

## Soporte

Para problemas o consultas, contactar al administrador del sistema.

## Licencia

Sistema desarrollado para uso interno de papelerías.
