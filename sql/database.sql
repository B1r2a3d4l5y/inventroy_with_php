CREATE TABLE IF NOT EXISTS equipment (
    equipment_id  VARCHAR(200) PRIMARY KEY NOT NULL,
    equipment_name VARCHAR(25) NOT NULL,
    equipment_price NUMERIC() NOT NULL,
    quanity INT() NOT NULL,
    brand VARCHAR(30) NOT NULL,
    date_added DATE() NOT NULL,
    new_or_old VARCHAR(10) NOT NULL