DROP TABLE IF EXISTS rsorteo; 
CREATE TABLE rsorteo (
    pk_key VARCHAR(32) PRIMARY KEY,
    email TEXT NOT NULL,
    confirmado BOOLEAN DEFAULT true
);