CREATE TABLE cats (
    id INTEGER PRIMARY KEY,
    name TEXT,
    breed TEXT,
    age INTEGER,
    ownerName TEXT,
    ownerEmail TEXT,
    vaccinated BOOLEAN,
    image_url TEXT
);

INSERT INTO cats (id, name, breed, age, ownerName, ownerEmail, vaccinated, image_url) VALUES
(1, 'Whiskers', 'Siamese', 2, 'Alice Johnson', 'alice.johnson@example.com', 1,"https://images.pexels.com/photos/416160/pexels-photo-416160.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"),
(2, 'Shadow', 'Maine Coon', 5, 'Bob Smith', 'bob.smith@example.com', 0,"https://images.pexels.com/photos/735423/pexels-photo-735423.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"),
(3, 'Mittens', 'Persian', 3, 'Carol Lee', 'carol.lee@example.com', 1,"https://images.pexels.com/photos/1056251/pexels-photo-1056251.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"),
(4, 'Pumpkin', 'Bengal', 1, 'David Brown', 'david.brown@example.com', 1,"https://images.pexels.com/photos/669015/pexels-photo-669015.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"),
(5, 'Luna', 'British Shorthair', 4, 'Emma Davis', 'emma.davis@example.com', 0,"https://images.pexels.com/photos/774731/pexels-photo-774731.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"),
(6, 'Tiger', 'Abyssinian', 6, 'Frank Wilson', 'frank.wilson@example.com', 1,""),
(7, 'Bella', 'Ragdoll', 3, 'Grace Miller', 'grace.miller@example.com', 1,""),
(8, 'Coco', 'Russian Blue', 2, 'Henry Taylor', 'henry.taylor@example.com', 0,""),
(9, 'Oliver', 'Sphynx', 5, 'Isabella Scott', 'isabella.scott@example.com', 1,""),
(10, 'Charlie', 'Norwegian Forest', 1, 'Jack Thompson', 'jack.thompson@example.com', 0,"");
