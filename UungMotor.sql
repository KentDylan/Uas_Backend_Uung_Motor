PGDMP  *                    |         	   UungMotor    16.3    16.2 [    _           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            `           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            a           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            b           1262    16762 	   UungMotor    DATABASE     �   CREATE DATABASE "UungMotor" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_Indonesia.1252';
    DROP DATABASE "UungMotor";
                postgres    false            �            1259    26074    appointments    TABLE     f  CREATE TABLE public.appointments (
    id bigint NOT NULL,
    user_id bigint NOT NULL,
    appointment_date date NOT NULL,
    appointment_time time(0) without time zone NOT NULL,
    status character varying(255) DEFAULT 'pending'::character varying NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.appointments;
       public         heap    postgres    false            �            1259    26073    appointments_id_seq    SEQUENCE     |   CREATE SEQUENCE public.appointments_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.appointments_id_seq;
       public          postgres    false    235            c           0    0    appointments_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.appointments_id_seq OWNED BY public.appointments.id;
          public          postgres    false    234            �            1259    26031    brands    TABLE     �   CREATE TABLE public.brands (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.brands;
       public         heap    postgres    false            �            1259    26030    brands_id_seq    SEQUENCE     v   CREATE SEQUENCE public.brands_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.brands_id_seq;
       public          postgres    false    225            d           0    0    brands_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.brands_id_seq OWNED BY public.brands.id;
          public          postgres    false    224            �            1259    26087 
   cart_items    TABLE     �   CREATE TABLE public.cart_items (
    id bigint NOT NULL,
    cart_id bigint NOT NULL,
    motorcycle_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.cart_items;
       public         heap    postgres    false            �            1259    26086    cart_items_id_seq    SEQUENCE     z   CREATE SEQUENCE public.cart_items_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.cart_items_id_seq;
       public          postgres    false    237            e           0    0    cart_items_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.cart_items_id_seq OWNED BY public.cart_items.id;
          public          postgres    false    236            �            1259    26060    carts    TABLE     �   CREATE TABLE public.carts (
    id bigint NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.carts;
       public         heap    postgres    false            �            1259    26059    carts_id_seq    SEQUENCE     u   CREATE SEQUENCE public.carts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.carts_id_seq;
       public          postgres    false    231            f           0    0    carts_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.carts_id_seq OWNED BY public.carts.id;
          public          postgres    false    230            �            1259    26007    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    26006    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    221            g           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    220            �            1259    25982 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    25981    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    216            h           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    215            �            1259    26051    motorcycles    TABLE     \  CREATE TABLE public.motorcycles (
    id bigint NOT NULL,
    product_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    price double precision NOT NULL,
    condition text NOT NULL,
    image_path text NOT NULL,
    link text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.motorcycles;
       public         heap    postgres    false            �            1259    26050    motorcycles_id_seq    SEQUENCE     {   CREATE SEQUENCE public.motorcycles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.motorcycles_id_seq;
       public          postgres    false    229            i           0    0    motorcycles_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.motorcycles_id_seq OWNED BY public.motorcycles.id;
          public          postgres    false    228            �            1259    26067    orders    TABLE       CREATE TABLE public.orders (
    id bigint NOT NULL,
    user_id bigint NOT NULL,
    motorcycle_id bigint NOT NULL,
    price double precision NOT NULL,
    status character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.orders;
       public         heap    postgres    false            �            1259    26066    orders_id_seq    SEQUENCE     v   CREATE SEQUENCE public.orders_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.orders_id_seq;
       public          postgres    false    233            j           0    0    orders_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.orders_id_seq OWNED BY public.orders.id;
          public          postgres    false    232            �            1259    25999    password_reset_tokens    TABLE     �   CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 )   DROP TABLE public.password_reset_tokens;
       public         heap    postgres    false            �            1259    26019    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    26018    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    223            k           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    222            �            1259    26040    products    TABLE       CREATE TABLE public.products (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    brand_id bigint NOT NULL,
    image_path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.products;
       public         heap    postgres    false            �            1259    26039    products_id_seq    SEQUENCE     x   CREATE SEQUENCE public.products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.products_id_seq;
       public          postgres    false    227            l           0    0    products_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;
          public          postgres    false    226            �            1259    25989    users    TABLE     �  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    address character varying(255),
    phone_number character varying(255)
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    25988    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    218            m           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    217            �           2604    26077    appointments id    DEFAULT     r   ALTER TABLE ONLY public.appointments ALTER COLUMN id SET DEFAULT nextval('public.appointments_id_seq'::regclass);
 >   ALTER TABLE public.appointments ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    234    235            �           2604    26034 	   brands id    DEFAULT     f   ALTER TABLE ONLY public.brands ALTER COLUMN id SET DEFAULT nextval('public.brands_id_seq'::regclass);
 8   ALTER TABLE public.brands ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    225    225            �           2604    26090    cart_items id    DEFAULT     n   ALTER TABLE ONLY public.cart_items ALTER COLUMN id SET DEFAULT nextval('public.cart_items_id_seq'::regclass);
 <   ALTER TABLE public.cart_items ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    236    237    237            �           2604    26063    carts id    DEFAULT     d   ALTER TABLE ONLY public.carts ALTER COLUMN id SET DEFAULT nextval('public.carts_id_seq'::regclass);
 7   ALTER TABLE public.carts ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    231    230    231            �           2604    26010    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    220    221            �           2604    25985    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            �           2604    26054    motorcycles id    DEFAULT     p   ALTER TABLE ONLY public.motorcycles ALTER COLUMN id SET DEFAULT nextval('public.motorcycles_id_seq'::regclass);
 =   ALTER TABLE public.motorcycles ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    229    229            �           2604    26070 	   orders id    DEFAULT     f   ALTER TABLE ONLY public.orders ALTER COLUMN id SET DEFAULT nextval('public.orders_id_seq'::regclass);
 8   ALTER TABLE public.orders ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    232    233    233            �           2604    26022    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222    223            �           2604    26043    products id    DEFAULT     j   ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);
 :   ALTER TABLE public.products ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226    227            �           2604    25992    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217    218            Z          0    26074    appointments 
   TABLE DATA           w   COPY public.appointments (id, user_id, appointment_date, appointment_time, status, created_at, updated_at) FROM stdin;
    public          postgres    false    235   �j       P          0    26031    brands 
   TABLE DATA           B   COPY public.brands (id, name, created_at, updated_at) FROM stdin;
    public          postgres    false    225   �j       \          0    26087 
   cart_items 
   TABLE DATA           X   COPY public.cart_items (id, cart_id, motorcycle_id, created_at, updated_at) FROM stdin;
    public          postgres    false    237   k       V          0    26060    carts 
   TABLE DATA           D   COPY public.carts (id, user_id, created_at, updated_at) FROM stdin;
    public          postgres    false    231   %k       L          0    26007    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    221   \k       G          0    25982 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    216   yk       T          0    26051    motorcycles 
   TABLE DATA           w   COPY public.motorcycles (id, product_id, name, price, condition, image_path, link, created_at, updated_at) FROM stdin;
    public          postgres    false    229   nl       X          0    26067    orders 
   TABLE DATA           c   COPY public.orders (id, user_id, motorcycle_id, price, status, created_at, updated_at) FROM stdin;
    public          postgres    false    233   +o       J          0    25999    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    219   Ho       N          0    26019    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public          postgres    false    223   eo       R          0    26040    products 
   TABLE DATA           Z   COPY public.products (id, name, brand_id, image_path, created_at, updated_at) FROM stdin;
    public          postgres    false    227   �o       I          0    25989    users 
   TABLE DATA           �   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, address, phone_number) FROM stdin;
    public          postgres    false    218   r       n           0    0    appointments_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.appointments_id_seq', 1, false);
          public          postgres    false    234            o           0    0    brands_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.brands_id_seq', 3, true);
          public          postgres    false    224            p           0    0    cart_items_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.cart_items_id_seq', 1, true);
          public          postgres    false    236            q           0    0    carts_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.carts_id_seq', 1, true);
          public          postgres    false    230            r           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    220            s           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 12, true);
          public          postgres    false    215            t           0    0    motorcycles_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.motorcycles_id_seq', 11, true);
          public          postgres    false    228            u           0    0    orders_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.orders_id_seq', 1, false);
          public          postgres    false    232            v           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    222            w           0    0    products_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.products_id_seq', 17, true);
          public          postgres    false    226            x           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 2, true);
          public          postgres    false    217            �           2606    26080    appointments appointments_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.appointments
    ADD CONSTRAINT appointments_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.appointments DROP CONSTRAINT appointments_pkey;
       public            postgres    false    235            �           2606    26038    brands brands_name_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.brands
    ADD CONSTRAINT brands_name_unique UNIQUE (name);
 C   ALTER TABLE ONLY public.brands DROP CONSTRAINT brands_name_unique;
       public            postgres    false    225            �           2606    26036    brands brands_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.brands
    ADD CONSTRAINT brands_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.brands DROP CONSTRAINT brands_pkey;
       public            postgres    false    225            �           2606    26092    cart_items cart_items_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.cart_items
    ADD CONSTRAINT cart_items_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.cart_items DROP CONSTRAINT cart_items_pkey;
       public            postgres    false    237            �           2606    26065    carts carts_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.carts
    ADD CONSTRAINT carts_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.carts DROP CONSTRAINT carts_pkey;
       public            postgres    false    231            �           2606    26015    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    221            �           2606    26017 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    221            �           2606    25987    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    216            �           2606    26058    motorcycles motorcycles_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.motorcycles
    ADD CONSTRAINT motorcycles_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.motorcycles DROP CONSTRAINT motorcycles_pkey;
       public            postgres    false    229            �           2606    26072    orders orders_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.orders DROP CONSTRAINT orders_pkey;
       public            postgres    false    233            �           2606    26005 0   password_reset_tokens password_reset_tokens_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);
 Z   ALTER TABLE ONLY public.password_reset_tokens DROP CONSTRAINT password_reset_tokens_pkey;
       public            postgres    false    219            �           2606    26026 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    223            �           2606    26029 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    223            �           2606    26049    products products_name_unique 
   CONSTRAINT     X   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_name_unique UNIQUE (name);
 G   ALTER TABLE ONLY public.products DROP CONSTRAINT products_name_unique;
       public            postgres    false    227            �           2606    26047    products products_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.products DROP CONSTRAINT products_pkey;
       public            postgres    false    227            �           2606    25998    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    218            �           2606    25996    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    218            �           1259    26027 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    223    223            �           2606    26081 )   appointments appointments_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.appointments
    ADD CONSTRAINT appointments_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;
 S   ALTER TABLE ONLY public.appointments DROP CONSTRAINT appointments_user_id_foreign;
       public          postgres    false    235    218    4760            Z      x������ � �      P   ?   x�3����KI�4202�50�52W02�20�2��&�e�����A�c��Ҫ��L�5��qqq d��      \      x������ � �      V   '   x�3�4�4202�50�52W02�20�2��&����� �n�      L      x������ � �      G   �   x�e�An� �u|�����w�4�0��b� +�틝b�W��g.��@`����)DLj�t���C8�U�x��`�H	��!W���]q���75[2����Ń�%�����y�S��c[$s���p�99�2����n6�^�}i��r���V
^f
�l:U{m�,�.>������3�C�ӓkRq�Z���S����%պ�٥���˼�>�˺�1h)���?	x�`      T   �  x���j�0�����Զ,�I(�v����HJ���Pl���KʡO?���`l�h��F�����+�"���E)�R�;�o�b�Җ�\��B���I�Yf���9(А�(+�h���cP�-di����\��yC����7]ta�{�AF+���0�t3K .K�P��x�r�FV莉m�̀[���*`bgnY��)��hĤFF�Z��dY�I��M>w	t[��I�8��ն~����N��dL1dR%�5h�N.�n���M�������;a���,�̭��4$壔�W!��,��:s��O�>�F�V���:T�t���L,	
�땯�U��~��*��7�O�("��>N�(iJ/%,�� �6��(2�C^�^��ص�_�.zrv3���
�D��i<Z��y.d��OZ�D������E��V�V�=Պ��j�_�Z�wU+�w�֥��S{5r%�Ρ7w�S|J�c˔�2�2��LM/�ʄ�b�v�s;���sKo��,Ib�:�`�Z�Z�����#k���"�\+�"�H�����!�ٿy'����7�`�;��CNTD/VT<���#�5�{Z��n�5�c�^</�:	�l�����t<[���z���:}q3-�����p��+tRo+:I7�����jꯆ��>�C���R#�{zx�No��`�?�F��L�x�      X      x������ � �      J      x������ � �      N      x������ � �      R   |  x����r�0���S�*��?�9i�EӤ�/:�A6� � b짯�Ӵ�tQ��p�{��З�%TX�t�0�O���V=ihJKE�t3�����m;��S�a�eoM�7��y6���̆��u-u��7� �����m�) PB&B O���"w�1�0��f$���_�&](i�ͼv��1!I(�e#�ta[�����v��F�?�9g4����F�ڜ[fv��qHY�*�"3�ٟ��=��Bgx�{�����;�v�K�x묮q��U�)L1��ka��hG��)����2̻	������c4��x>����[�;�+���[�o\Ikպ5��y�+Ob���O���|���n�����ĕ��2��=dn�V�[���b�}���3��D�="��2Ew'�!���q�%!�"a��� 4W�N��RH	�y�ү)D�_� Э�Ip8q3���4����R�C�M+�|z�KY�a�0�k��O��Ϯ1t-}: p>%<N"`<eĳk-�uщ�_<]蟴�S���x�>+Ux|�����	t���ek�θT���Z�.���ǫl��Z{Dh���:7��VV/����|K�ߔ�����/}�r|m5&����`2��s1      I   �   x�����0 E���4m1�L��H� �!,�@E�
~�]\�Mn�M)k��}k�V,/a�+8@&����]��X�|���K�����T����L,����f�ڙ�z# ���}�	"Si
�M6�f�����D �����O����:$'N��Qm�[d���������ǂ�z�L��Kx&�� J���N�     