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

INSERT INTO public.data VALUES (52, 'Data-data', '1594174640', 48, 'MAKNA_LOGO1.docx', 'kepegawaian', 'ini adalah contoh data');
INSERT INTO public.data VALUES (53, 'contoh 2', '1594174692', 48, 'PERISTILAHAN_KIMIA2.docx', 'sosial', 'peristilahan Kimia contoh');
INSERT INTO public.data VALUES (56, 'apa', '1594175239', 48, 'bab_36.docx', 'kepegawaian', 'test');
INSERT INTO public.data VALUES (57, 'olahraga', '1594175277', 50, 'PLPD1.pptx', 'kepegawaian', 'test');
INSERT INTO public.data VALUES (58, 'testasdl', '1594175291', 50, 'icha.jpg', 'kepegawaian', 'sauaksas');
INSERT INTO public.data VALUES (59, 'testlasas', '1594175305', 50, 'Format_PPT.pptx', 'informasi', 'asdaslas');
INSERT INTO public.data VALUES (60, 'asdkgasd', '1594175376', 49, 'PERISTILAHAN_KIMIA3.docx', 'sosial', 'asdjasas');
INSERT INTO public.data VALUES (61, 'satasdlas', '1594175421', 49, 'pengumuman-banding11.pdf', 'informasi', 'asdkjas');
INSERT INTO public.data VALUES (62, 'askas', '1594175439', 49, 'PERISTILAHAN_KIMIA_Hiskia_14117091.pdf', 'keuangan', 'asdhas');
INSERT INTO public.data VALUES (63, 'asdasl', '1594175476', 51, 'MAKNA_LOGO2.docx', 'informasi', 'asdaska');
INSERT INTO public.data VALUES (64, 'ksajdhsa', '1594175564', 51, 'PERISTILAHAN_KIMIA4.docx', 'informasi', 'asdaskj');
INSERT INTO public.data VALUES (65, 'asdam', '1594175603', 51, 'PERISTILAHAN_KIMIA5.docx', 'keuangan', 'asdask');


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public."user" VALUES (12, 'hiskia', 'kicat@gmail.com', 'default.jpg', '$2y$10$Q0jt1nxv8yU13/hi5j3Wpey5.ABWru3UutmRnzoReDsvzQE5jEFU.', 1, 1, '1593421223');
INSERT INTO public."user" VALUES (48, 'Dinas Komunikasi Dan Informatika', 'kominfo@gmail.com', 'default.jpg', '$2y$10$iCNv93f357w2qOqaIvuKd.H4WaVdPWyqSKt0UGgYyveHcTKgmywx.', 2, 1, '1594174162');
INSERT INTO public."user" VALUES (49, 'Dinas Kesehatan', 'dinkes@gmail.com', 'default.jpg', '$2y$10$3AJsEoF5ULLC1oYK8BQqeu9V3nOs3QC61qkUPuDYwlBdYs9WJM1Ym', 2, 1, '1594174196');
INSERT INTO public."user" VALUES (50, 'Dinas Pemuda Dan Olahraga', 'dispora@gmail.com', 'default.jpg', '$2y$10$IFHTMnGnNmVPJ/uUtxA5wOqJz0ohEP/hYuJt0Guw2zIMTM4UE.Syq', 2, 1, '1594174243');
INSERT INTO public."user" VALUES (51, 'Dinas Pendidikan', 'pendidikan@gmail.com', 'default.jpg', '$2y$10$UgMoAXX8qiG8dnL38/6KUuYsnFF8BnzdeinbGwjyZV44D/ID75Q4y', 2, 1, '1594174289');


--
-- Name: id; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.id', 65, true);


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

