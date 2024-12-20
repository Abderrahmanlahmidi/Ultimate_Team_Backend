CREATE TABLE ultimate_teams.nationality(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nationality VARCHAR(255),
    flag VARCHAR(255)
);


CREATE TABLE ultimate_teams.players(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nationality VARCHAR(255),
    flag VARCHAR(255)
);

CREATE TABLE ultimate_teams.players(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ultimate_teams.nationality.id INT,
    id_event INT,
    FOREIGN KEY(id_membre) REFERENCES Members(id_membre),
    FOREIGN KEY(id_event) REFERENCES Evennements(id_event)
);


CREATE TABLE ultimate_teams.players(
     id INT PRIMARY KEY AUTO_INCREMENT,
     name VARCHAR(255),
     position VARCHAR(255),
     photo VARCHAR(255),
     FOREIGN KEY(id_nationality) REFERENCES ultimate_teams.nationality(id),
     FOREIGN KEY(id_nationality) REFERENCES ultimate_teams.nationality(id),
     FOREIGN KEY(id_nationality) REFERENCES ultimate_teams.nationality(id),

)


CREATE TABLE ultimate_teams.club(
    id INT PRIMARY KEY AUTO_INCREMENT,
    club VARCHAR(255),
    logo VARCHAR(255),
    FOREIGN KEY(id_nationality) REFERENCES ultimate_teams.players(id)

) 


DELETE FROM ultimate_teams.statistic_gardes WHERE id = 3;

INSERT INTO ultimate_teams.nationality (id, nationality, flag)
VALUES (3,"Italy","https://cdn.sofifa.net/flags/it.png");

INSERT INTO ultimate_teams.club(id, club, logo)
VALUES(3, 'Paris Saint Germain', 'https://cdn.sofifa.net/meta/team/591/120.png');



CREATE TABLE ultimate_teams.statistic_gardes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    rating  INT NOT NULL, 
    diving INT NOT NULL, 
    handling INT NOT NULL, 
    kicking INT NOT NULL, 
    reflexes INT NOT NULL, 
    speed INT NOT NULL, 
    positioning INT NOT NULL
)

CREATE TABLE ultimate_teams.players_statistics(
    id INT PRIMARY KEY AUTO_INCREMENT,
    rating  INT NOT NULL, 
    pace INT NOT NULL, 
    shooting INT NOT NULL, 
    passing INT NOT NULL, 
    dribbling INT NOT NULL, 
    defending INT NOT NULL, 
    physical INT NOT NULL
)

INSERT INTO ultimate_teams.players_statistics ( id, rating, pace, shooting, passing, dribbling, defending, physical)
VALUES(1, 93, 85, 92, 91, 95, 35, 65);
VALUES(1, 91, 84, 94, 82, 87, 34, 77);


CREATE TABLE players(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    position VARCHAR(255),
    photo VARCHAR(255),
    id_club INT,
    id_nationality INT,
    id_gardiane INT,
    id_player INT,
    FOREIGN KEY (id_club) REFERENCES club(id),
    FOREIGN KEY (id_nationality) REFERENCES nationality(id),
    FOREIGN KEY (id_gardiane) REFERENCES gardes_statistics(id),
    FOREIGN KEY (id_player) REFERENCES players_statistics(id)
)

INSERT INTO ultimate_teams.players (name, position, photo, id_club, id_nationality,id_player)
VALUES("Lionel Messi", "RW", "https://cdn.sofifa.net/players/158/023/25_120.png", 1, 1, 1);



SELECT * FROM ultimate_teams.players p, ultimate_teams.club c, ultimate_teams.nationality n, ultimate_teams.gardes_statistics g, ultimate_teams.players_statistics s 
WHERE p.id = c.id and p.id = n.id and p.id = g.id and p.id = s.id;




INSERT INTO ultimate_teams.players (name, position, photo, id_club, id_nationality,id_gardiane)
VALUES("Gianluigi Donnarumma", "GK", "https://cdn.sofifa.net/players/230/621/25_120.png", 3, 3, 1);

-- other createing

CREATE TABLE ultimate_teams.nationality(
    id INT,
    nationality VARCHAR(255),
    flag VARCHAR(255),
    FOREIGN KEY(id) REFERENCES ultimate_teams.players(id)
);

CREATE TABLE ultimate_teams.statistic_gardes(
    id INT,
    rating  INT NOT NULL, 
    diving INT NOT NULL, 
    handling INT NOT NULL, 
    kicking INT NOT NULL, 
    reflexes INT NOT NULL, 
    speed INT NOT NULL, 
    positioning INT NOT NULL,
    FOREIGN KEY(id) REFERENCES ultimate_teams.players(id)
)


CREATE TABLE ultimate_teams.players_statistics(
    id INT,
    rating  INT NOT NULL, 
    pace INT NOT NULL, 
    shooting INT NOT NULL, 
    passing INT NOT NULL, 
    dribbling INT NOT NULL, 
    defending INT NOT NULL, 
    physical INT NOT NULL,
    FOREIGN KEY(id) REFERENCES ultimate_teams.players(id)
)



-- player

INSERT INTO ultimate_teams.players (name, position, photo)
VALUES("Lionel Messi", "RW", "https://cdn.sofifa.net/players/158/023/25_120.png");


INSERT INTO ultimate_teams.club (id, club, logo)
VALUES(1, "Inter Miami", "https://cdn.sofifa.net/meta/team/239235/120.png");

INSERT INTO ultimate_teams.nationality (id, nationality, flag)
VALUES(1, "Argentina", "https://cdn.sofifa.net/flags/ar.png");

INSERT INTO ultimate_teams.players_statistics ( id, rating, pace, shooting, passing, dribbling, defending, physical)
VALUES(1, 93, 85, 92, 91, 95, 35, 65);

-- goal

INSERT INTO ultimate_teams.players (name, position, photo)
VALUES("Gianluigi Donnarumma", "GK", "https://cdn.sofifa.net/players/230/621/25_120.png");


INSERT INTO ultimate_teams.club (id, club, logo)
VALUES(2, "Paris Saint-Germain", "https://cdn.sofifa.net/meta/team/591/120.png");

INSERT INTO ultimate_teams.nationality (id, nationality, flag)
VALUES(2, "Italy", "https://cdn.sofifa.net/flags/it.png");

INSERT INTO ultimate_teams.gardes_statistics ( id, rating, diving, handling, kicking, reflexes, speed, positioning)
VALUES(2, 89, 88, 84, 75, 90, 50, 85);

-- get goal
SELECT * FROM ultimate_teams.players p, ultimate_teams.club c, ultimate_teams.nationality n, ultimate_teams.statistic_gardes g
                                 WHERE p.id = c.id and p.id = n.id and p.id = g.id;
-- get player
SELECT * FROM ultimate_teams.players p, ultimate_teams.club c, ultimate_teams.nationality n, ultimate_teams.players_statistics s
                                 WHERE p.id = c.id and p.id = n.id and p.id = s.id;
