--
-- PostgreSQL database dump
--

-- Dumped from database version 11.5
-- Dumped by pg_dump version 11.8

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: adminpack; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION adminpack; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';


--
-- Name: id; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.id
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.id OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: data; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.data (
    id_data integer DEFAULT nextval('public.id'::regclass) NOT NULL,
    judul text,
    tanggal text NOT NULL,
    id_owner integer NOT NULL,
    file character varying(200),
    kategori character varying(100),
    keterangan text
);


ALTER TABLE public.data OWNER TO postgres;

--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."user" (
    id integer DEFAULT nextval('public.id'::regclass) NOT NULL,
    name text,
    email text,
    image character varying(256),
    password character varying(256),
    role_id integer,
    is_active integer,
    date text
);


ALTER TABLE public."user" OWNER TO postgres;

--
-- Name: TABLE "user"; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE public."user" IS 'untuk user yang login';


--
-- Data for Name: data; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.data VALUES (39, 'Data Kesehatan', '1594023532', 38, 'COVER1.docx', 'informasi', 'Data Kesehatan 2020');
INSERT INTO public.data VALUES (40, 'test', '1594023659', 31, 'bab_33.docx', 'keuangan', 'test');
INSERT INTO public.data VALUES (41, 'test 2', '1594023873', 31, 'PERISTILAHAN_KIMIA1.docx', 'keuangan', 'test');


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public."user" VALUES (12, 'hiskia', 'kicat@gmail.com', 'default.jpg', '$2y$10$Q0jt1nxv8yU13/hi5j3Wpey5.ABWru3UutmRnzoReDsvzQE5jEFU.', 1, 1, '1593421223');
INSERT INTO public."user" VALUES (31, 'Dinas Komunikasi Dan Informatika', 'kominfo@gmail.com', 'default.jpg', '$2y$10$pFbLrFS4fxlULPJPuBhW2./Qo8QI1Seb1zlwu2CA1cFZ4TgsT/9.W', 2, 1, '1594003793');
INSERT INTO public."user" VALUES (38, 'Dinas Kesehatan', 'kesehatan@gmail.com', 'default.jpg', '$2y$10$oMqaDbUY74SjyBQnyq3Ji.YZMaxO.yA0t2DCpjvQOWjm9yBuzO.n2', 2, 1, '1594023410');


--
-- Name: id; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.id', 41, true);


--
-- Name: data data_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data
    ADD CONSTRAINT data_pkey PRIMARY KEY (id_data);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: data data_id_owner_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data
    ADD CONSTRAINT data_id_owner_fkey FOREIGN KEY (id_owner) REFERENCES public."user"(id);


--
-- PostgreSQL database dump complete
--

