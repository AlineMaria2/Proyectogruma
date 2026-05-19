-- Eliminar tablas anteriores para evitar conflictos de nombres
DROP TABLE IF EXISTS ticket;
DROP TABLE IF EXISTS produccion;
DROP TABLE IF EXISTS producto;
DROP TABLE IF EXISTS cliente;

-- 1️⃣ Tabla Cliente (id_cliente ahora es VARCHAR para que puedas usar códigos como 'C01' o números sueltos)
CREATE TABLE cliente (
    id_cliente VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    genero VARCHAR(20),
    activo VARCHAR(2) DEFAULT 'SÍ', -- Cambiado de BINARY a VARCHAR (Mucho más fácil: 'SÍ' o 'NO')
    credito DECIMAL(10,2) DEFAULT 0.00 -- Cambiado de INT a DECIMAL para manejar dinero con centavos
);

-- 2️⃣ Tabla Producto (Tu catálogo real con precios y stock)
CREATE TABLE producto (
    id_producto VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    tipo VARCHAR(50),
    stock INT DEFAULT 0,
    precio_unit DECIMAL(10,2) DEFAULT 0.00
);

-- 3️⃣ Tabla Ticket (Para registrar tus ventas finales)
CREATE TABLE ticket (
    id_ticket INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente VARCHAR(20),
    id_producto VARCHAR(20),
    cantidad_prod INT NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    fecha DATE,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente) ON UPDATE CASCADE,
    FOREIGN KEY (id_producto) REFERENCES producto(id_producto) ON UPDATE CASCADE
);cliente