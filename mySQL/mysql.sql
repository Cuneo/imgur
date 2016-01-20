DROP TABLE IF EXISTS updownvote;
DROP TABLE IF EXISTS favorite;
DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	email VARCHAR(128)NOT NULL,
	username VARCHAR(40)NOT NULL,
	UNIQUE (email),
	UNIQUE (username),
	PRIMARY KEY (profileId)
);
CREATE TABLE post (
	postId      INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileId   INT UNSIGNED NOT NULL,
	postContent VARCHAR(255) NOT NULL,
	postDate    DATETIME NOT NULL,
	INDEX (profileId),
	FOREIGN KEY (profileId) REFERENCES profile (profileId),
	PRIMARY KEY (postId)
);
CREATE TABLE comment (
	postId      INT UNSIGNED NOT NULL,
	profileId   INT UNSIGNED NOT NULL,
	comment     VARCHAR(140) NOT NULL,
	commentDate DATETIME     NOT NULL,
	INDEX (profileId),
	INDEX (postId),
	FOREIGN KEY (profileId) REFERENCES profile (profileId),
	FOREIGN KEY (postId) REFERENCES post (postId),
	PRIMARY KEY (profileId, postId)
);
CREATE TABLE favorite (
	profileId INT UNSIGNED NOT NULL,
	postId INT UNSIGNED NOT NULL,
	favoriteDate DATETIME NOT NULL,
	INDEX (profileId),
	INDEX (postId),
	FOREIGN KEY (profileId) REFERENCES profile(profileId),
	FOREIGN KEY (postId) REFERENCES post(postId),
	PRIMARY KEY (profileId, postId)
);
CREATE TABLE updownvote (
	profileId INT UNSIGNED NOT NULL,
	postId INT UNSIGNED NOT NULL,
	updownvoteDate DATETIME NOT NULL,
	INDEX (profileId),
	INDEX (postId),
	FOREIGN KEY (profileId) REFERENCES profile(profileId),
	FOREIGN KEY (postId) REFERENCES post(postId),
	PRIMARY KEY (profileId, postId)
);