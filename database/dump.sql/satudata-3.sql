--
-- PostgreSQL database dump
--

-- Dumped from database version 12.3
-- Dumped by pg_dump version 12.3

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
-- Name: adminpack; Type: EXTENSION; Schema: -; Owner: -
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

SET default_table_access_method = heap;

--
-- Name: data; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.data (
    id_data integer DEFAULT nextval('public.id'::regclass) NOT NULL,
    judul text,
    tanggal date,
    id_owner integer NOT NULL
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

INSERT INTO public.data VALUES (1, 'Data Instansi yang Sudah memiliki jaringan Wifi sendiri', '2020-06-26', 2);
INSERT INTO public.data VALUES (5, 'Data Tanaman-tanaman unggulan setiap Kecamatan di kabupaten karo', '2020-06-26', 3);


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public."user" VALUES (1, 'admin', 'admin@gmail.com', '', 'admin', 1, 0, '2020-06-23');
INSERT INTO public."user" VALUES (2, 'DISKOMINFO', 'diskominfo@gmail.com', '', 'admin1', 2, 1, '2020-06-26');
INSERT INTO public."user" VALUES (3, 'DINAS PERTANIAN', 'dinas_pertanian@gmail.com', '', 'admin2', 2, 1, '2020-06-26');
INSERT INTO public."user" VALUES (6, 'Dinas Pendidikan', 'dinaspendidikan@gmail.com', 'default.jpg', '$2y$10$XIthk35J2yoiufCYv7CyC.2EZ7svgtBrNdT/Ddd7Hqu4/qxBDiMae', 2, 1, '1593161258');
INSERT INTO public."user" VALUES (7, 'DISCAPIL', 'discapil@gmail.com', 'default.jpg', '$2y$10$mx/kJWWw7CDBGC1AnrRTYuWgzTwaUZQNyfBNEHshdwxlwHHFq261K', 2, 1, '1593161409');
INSERT INTO public."user" VALUES (8, 'Dinas Pekerjaan Umum', 'dpu@gmail.com', 'default.jpg', '$2y$10$K43gjMvD/cg/M3DXtqavfelQjNdopAp2YaDTwnOKZjFORS298EJMC', 2, 1, '1593162417');
INSERT INTO public."user" VALUES (9, 'Dinas Perhubungan', 'dp@gmail.com', 'default.jpg', '$2y$10$kNJpqwNSltjhHweItAEeb.s5T1M./Vkpx15K/COpWVwOP3URCaZHq', 2, 1, '1593162510');
INSERT INTO public."user" VALUES (10, 'Dinas Kesehatan', 'dinkes@gmail.com', 'default.jpg', '$2y$10$deQ1QdbR2nxZiOGivSnsAuwgW6VnE89rLAmKtAy6whgALFF5dg6R.', 2, 1, '1593162606');


--
-- Name: id; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.id', 10, true);


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

