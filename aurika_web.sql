CREATE DATABASE IF NOT EXISTS aurika_web;
USE aurika_web;

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Rahul Sharma', 'rahul.sharma@gmail.com', 'Course Enquiry', 'I want details about CA Foundation programs and fees structure.', '2025-12-18 12:25:24');


ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

