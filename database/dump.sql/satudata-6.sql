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
    tanggal text NOT NULL,
    id_owner integer NOT NULL,
    file character varying(200),
    kategori character varying(100),
    keterangan text,
    tgl_perbarui text
);


ALTER TABLE public.data OWNER TO postgres;

--
-- Name: galeri; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.galeri (
    id integer DEFAULT nextval('public.id'::regclass) NOT NULL,
    gambar text,
    judul text,
    keterangan text,
    id_owner integer,
    tanggal text
);


ALTER TABLE public.galeri OWNER TO postgres;

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



--
-- Data for Name: galeri; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public."user" VALUES (74, 'Super Admin', 'su@gmail.com', 'logokaro.gif', '$2y$10$.64we1FFr/jnZrmXjdC0VunvegSJbEJBzawfhQIJ.CvUTlfRm2r6q', 1, 1, '1595828215');
INSERT INTO public."user" VALUES (75, 'SIMERAWANA', 'simerawana@gmail.com', 'logokaro.gif', '$2y$10$T5stDZQwVoS4FsPMRWWBiOG9jwwM/lNDtlbncZrUMTVKFAGQmcwQa', 1, 1, '1595828340');


--
-- Name: id; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.id', 75, true);


--
-- Name: data data_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data
    ADD CONSTRAINT data_pkey PRIMARY KEY (id_data);


--
-- Name: galeri galeri_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.galeri
    ADD CONSTRAINT galeri_pkey PRIMARY KEY (id);


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
-- Name: galeri galeri_id_owner_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.galeri
    ADD CONSTRAINT galeri_id_owner_fkey FOREIGN KEY (id_owner) REFERENCES public."user"(id);


--
-- PostgreSQL database dump complete
--

