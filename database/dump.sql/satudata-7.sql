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

INSERT INTO public.data VALUES (91, 'Data Ternak 2019 - Statistik 1', '27 July 2020', 84, 'Data_Ternak_2019_Statistik1.pdf', 'informasi', 'Data Ternak 2019', NULL);
INSERT INTO public.data VALUES (92, 'Data Ternak 2019 - Statistik 2', '27 July 2020', 84, 'Data_Ternak_2019_Statistik21.pdf', 'informasi', 'Data Ternak 2019', '27 July 2020');
INSERT INTO public.data VALUES (93, 'Data Ternak 2019 - Statistik 3', '27 July 2020', 84, 'Data_Ternak_2019_Statistik3.pdf', 'informasi', '', NULL);
INSERT INTO public.data VALUES (94, 'Data Ternak 2019 - Statistik 4', '27 July 2020', 84, 'Data_Ternak_2019_Statistik4.pdf', 'informasi', '', NULL);
INSERT INTO public.data VALUES (95, 'Data Ternak 2019 - Statistik 5', '27 July 2020', 84, 'Data_Ternak_2019_Statistik5.pdf', 'informasi', '', NULL);
INSERT INTO public.data VALUES (100, 'Data PNS 2020 - Statistik 4', '28 July 2020', 96, 'Data_PNS_2020_statistik4.pdf', 'keuangan', 'Data PNS 200 - Statistik 4', '28 July 2020');
INSERT INTO public.data VALUES (97, 'Data PNS 2020 - Statistik 1', '28 July 2020', 96, 'Data_PNS_2020_statistik1.pdf', 'keuangan', 'Data PNS 2020 Statistik 1', '28 July 2020');
INSERT INTO public.data VALUES (99, 'Data PNS 2020 - Statistik 3', '28 July 2020', 96, 'Data_PNS_2020_statistik3.pdf', 'keuangan', 'Data PNS 200 - Statistik 3', '28 July 2020');
INSERT INTO public.data VALUES (98, 'Data PNS 2020 - Statistik 2', '28 July 2020', 96, 'Data_PNS_2020_statistik2.pdf', 'keuangan', 'Data PNS 200 - Statistik 2', '28 July 2020');


--
-- Data for Name: galeri; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.galeri VALUES (104, 'bkd4.jpg', 'wef', 'ww', 76, '28 July 2020');
INSERT INTO public.galeri VALUES (105, 'bkd5.jpg', 'data 1', 'kjnj', 96, '30 July 2020');


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public."user" VALUES (74, 'Super Admin', 'su@gmail.com', 'logokaro.gif', '$2y$10$.64we1FFr/jnZrmXjdC0VunvegSJbEJBzawfhQIJ.CvUTlfRm2r6q', 1, 1, '1595828215');
INSERT INTO public."user" VALUES (75, 'SIMERAWANA', 'simerawana@gmail.com', 'logokaro.gif', '$2y$10$T5stDZQwVoS4FsPMRWWBiOG9jwwM/lNDtlbncZrUMTVKFAGQmcwQa', 1, 1, '1595828340');
INSERT INTO public."user" VALUES (77, 'Dinas kehutanan', 'dithut@gmail.com', 'kehutanan.jpg', '$2y$10$Ubu4.RJSr/0p.2ZO4JI0Y.u0Z8UstE2bG9vvU/B.BxXokvQKjQ1um', 2, 1, '1595836899');
INSERT INTO public."user" VALUES (78, 'Dinas keuangan', 'keuangan@gmail.com', 'keuangan.jpg', '$2y$10$BTVIjXuzxAAdtyjRSM4PSesBcO4L92xGhUP5LzGlikciD3AvCf7fi', 2, 1, '1595836923');
INSERT INTO public."user" VALUES (79, 'Dinas Kesehatan', 'kesehatan@gmail.com', 'kesehatan.jpg', '$2y$10$0qI7B92QNRLhIMMD9gVmou5k5yOzT0NfxciAu3n/drjBMElhuTQJy', 2, 1, '1595836963');
INSERT INTO public."user" VALUES (80, 'Dinas Kepemudaan Dan Olahraga', 'dispora@gmail.com', 'dispora.png', '$2y$10$Rpym9ybmJ9M2/ytil/knS.woTD9JiwHOI0yRaJIQAZ06P8T.Cd0xa', 2, 1, '1595837130');
INSERT INTO public."user" VALUES (81, 'Dinas Lingkungan Hidup', 'lingkunganhidup@gmail.com', 'lingkungan.jpg', '$2y$10$stX8XN83qrRMyiX1VEvF4.kz.MzUAkjkvhWjKacgMp6ZG/atz2/cW', 2, 1, '1595837224');
INSERT INTO public."user" VALUES (82, 'Dinas Pendidikan', 'disdik@gmail.com', 'disdik.png', '$2y$10$RcHv9TZDve3RO1ORVUP5T.oSh99RA5IYZv3f3HVOFlWZiE/pyBlYO', 2, 1, '1595837287');
INSERT INTO public."user" VALUES (83, 'Dinas Perikanan', 'dkp@gmail.com', 'dkp.jpg', '$2y$10$8zqLqeCfb6d.Qp7DAVrIPOLpcaMTWmt1MhqFZL.sYyCUeog3mXr0C', 2, 1, '1595837426');
INSERT INTO public."user" VALUES (84, 'DInas Pertanian', 'pertanian@gmail.com', 'pertanian.png', '$2y$10$FHJZrr1bHTFpnES/QJr4yepymDtWt/lVVUOH4mw0tVV.anptZwQr.', 2, 1, '1595837467');
INSERT INTO public."user" VALUES (85, 'Dinas Sosial', 'dinsos@gmail.com', 'dinsos.jpg', '$2y$10$deRYMgVm1CuA1rIR1snGw.5lHvemrdpjLzGthW6dy2CaV3Atemtja', 2, 1, '1595837498');
INSERT INTO public."user" VALUES (86, 'Dinas Pariwisata dan Kebudayan', 'pariwisata@gmail.com', 'pariwisata.png', '$2y$10$6AS1t0BB73kpk12FiskPyOpaMghIjW7glIP8x.BMu2YfjcmjvFG16', 2, 1, '1595837613');
INSERT INTO public."user" VALUES (87, 'Dinas Kependudukan dan Catatan Sipil', 'dukcapil@gmail.com', 'dukcapil1.png', '$2y$10$uU2QGc9d2.Qf0OLsvRlCuOZ7wP/gLuFNXzuRcSVcN1.XhYiCZKDv2', 2, 1, '1595837673');
INSERT INTO public."user" VALUES (88, 'DInas Kearsipan dan Perpustakaan', 'arpusda@gmail.com', 'arpusda.jpg', '$2y$10$rnuIVdGHkoAaeHszUfATHOy3tcHVdI7V.2O.A5/iaI5NvUPHRHZmW', 2, 1, '1595837782');
INSERT INTO public."user" VALUES (89, 'Dinas Ketahanan Pangan', 'tanpan@gmail.com', 'tanpan.png', '$2y$10$E4l8zt4lf33zcUc1SROUNe1ulmH3shlRY5ltbIIw1QfmTjZpXvQvu', 2, 1, '1595837833');
INSERT INTO public."user" VALUES (90, 'Dinas Pekerjaan Umum dan Penataan Ruang', 'puprda@gmail.com', 'puprda.png', '$2y$10$2q8JdJ.4tLUnPybZhO6F4uyVmzmddEQjpdk9OlMVrj.PI8ax8pEn2', 2, 1, '1595837915');
INSERT INTO public."user" VALUES (96, 'Badan Kepegawaian Daerah', 'bkdkaro@gmail.com', 'bkd.jpg', '$2y$10$yRV9m5rWx5Ykab2OF8Nw1.jEWgZvPXGuWGbGeOJtOl9CZrr0QxLV2', 2, 1, '1595906796');
INSERT INTO public."user" VALUES (76, 'Dinas Komunikasi Dan Informatika', 'kominfo@gmail.com', 'download.jpg', '$2y$10$rEAumVoKeCp4Sozu5XtpHuk56fb/hzbt.oTe0La0/AL2WSdJ1Ccr6', 2, 1, '1595836874');


--
-- Name: id; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.id', 106, true);


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

