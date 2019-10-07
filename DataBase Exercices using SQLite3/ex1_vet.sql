create table Animals (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
    breed TEXT REFERENCES Breeds NOT NULL,
    owner INTEGER REFERENCES Owners,
);

create table Breeds(
    name TEXT PRIMARY KEY

);
