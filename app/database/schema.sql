CREATE TABLE users (
    id bigserial PRIMARY KEY,
    first_name character varying(64),
    last_name character varying(64),
    email character varying(128),
    password character varying(256),
    active boolean,
    new boolean,
    token character varying(128),
    phone character varying(32),
    address character varying(256),
    birthdate date,
    file character varying(64),
    path character varying(256),
    facebook character varying(256),
    twitter character varying(256),
    youtube character varying(256),
    country_id integer,
    state_id integer,
    city_id integer,
    created timestamp without time zone,
    modified timestamp without time zone
);

CREATE TABLE categories (
    id serial PRIMARY KEY,
    name character varying(128),
    path character varying(256),
    file character varying(64),
    description text,
    parent_id integer,
    created timestamp without time zone,
    modified timestamp without time zone
);

CREATE TABLE campaigns (
    id bigserial PRIMARY KEY,
    name character varying(128),
    description text,
    type integer,
    money_goal double precision,
    money_now double precision,
    url_video character varying(256),
    slug character varying(128),
    file_1 character varying(128),
    file_2 character varying(128),
    file_3 character varying(128),
    file_4 character varying(128),
    file_5 character varying(128),
    path character varying(64),
    status integer,
    begin_date date,
    end_date date,
    country_id integer,
    state_id integer,
    city_id integer,
    category_id integer,
    user_id bigint,
    created timestamp without time zone,
    modified timestamp without time zone
);

CREATE TABLE cities (
    id serial PRIMARY KEY,
    name character varying(128),
    state_id integer
);

CREATE TABLE countries (
    id serial PRIMARY KEY,
    name character varying(128),
    sortname character varying(8),
    active boolean DEFAULT false
);

CREATE TABLE states (
    id serial PRIMARY KEY,
    name character varying(128),
    country_id integer
);