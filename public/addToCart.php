<?php
require_once("../src/controller/controller.php");
$icons = [
    // [
//     'Hot Coffee' => '<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
//                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M4.01917 12.0496C3.88617 10.0496 3.81917 9.05057 4.41217 8.41757C5.00517 7.78357 6.00717 7.78357 8.01117 7.78357H13.4602C15.4632 7.78357 16.4652 7.78357 17.0582 8.41757C17.2202 8.59057 17.3332 8.79157 17.4082 9.03357H17.7352C20.2612 9.03357 22.4852 10.8456 22.4852 13.2836C22.4852 15.7216 20.2612 17.5336 17.7352 17.5336H17.0852L17.0502 18.0336H4.42017C4.40083 17.7669 4.3815 17.4836 4.36217 17.1836L4.01917 12.0496ZM17.1852 16.0336H17.7352C19.6272 16.0336 20.9852 14.7116 20.9852 13.2836C20.9852 11.8556 19.6272 10.5336 17.7352 10.5336H17.5352C17.5232 10.9636 17.4902 11.4636 17.4512 12.0496L17.1852 16.0336Z" fill="#9C9C9C"/>
//                                     <path d="M4.5542 19.5336H16.9162C16.7722 20.7106 16.5382 21.4506 15.9782 21.9736C15.1132 22.7836 13.7822 22.7836 11.1222 22.7836H10.3482C7.6882 22.7836 6.3582 22.7836 5.4922 21.9736C4.9322 21.4506 4.6982 20.7106 4.5542 19.5336Z" fill="#9C9C9C"/>
//                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71213 2.11057C7.87402 2.22609 7.98341 2.40118 8.01623 2.59734C8.04904 2.79349 8.00261 2.99465 7.88713 3.15657L7.50113 3.69757C8.12713 4.17157 8.26613 5.06157 7.80713 5.70457L7.39713 6.28057C7.28163 6.44262 7.10648 6.55215 6.91023 6.58506C6.71397 6.61797 6.51268 6.57158 6.35063 6.45607C6.18858 6.34057 6.07905 6.16543 6.04614 5.96917C6.01323 5.77291 6.05963 5.57162 6.17513 5.40957L6.56113 4.86757C6.25907 4.63857 6.05816 4.30086 6.00103 3.92614C5.94389 3.55142 6.03504 3.16919 6.25513 2.86057L6.66613 2.28557C6.78164 2.12368 6.95673 2.01429 7.15289 1.98148C7.34905 1.94866 7.55021 1.9951 7.71213 2.11057ZM11.7121 2.11057C11.874 2.22609 11.9834 2.40118 12.0162 2.59734C12.049 2.79349 12.0026 2.99465 11.8871 3.15657L11.5011 3.69757C12.1271 4.17157 12.2661 5.06157 11.8071 5.70457L11.3971 6.28057C11.3399 6.36081 11.2675 6.429 11.184 6.48124C11.1004 6.53349 11.0074 6.56876 10.9102 6.58506C10.813 6.60136 10.7136 6.59835 10.6176 6.57622C10.5216 6.55409 10.4309 6.51327 10.3506 6.45607C10.2704 6.39888 10.2022 6.32645 10.15 6.24291C10.0977 6.15936 10.0624 6.06635 10.0461 5.96917C10.0298 5.87199 10.0328 5.77256 10.055 5.67654C10.0771 5.58053 10.1179 5.48981 10.1751 5.40957L10.5611 4.86757C10.2591 4.63857 10.0582 4.30086 10.001 3.92614C9.94389 3.55142 10.035 3.16919 10.2551 2.86057L10.6661 2.28557C10.7816 2.12368 10.9567 2.01429 11.1529 1.98148C11.349 1.94866 11.5502 1.9951 11.7121 2.11057ZM15.7121 2.11057C15.874 2.22609 15.9834 2.40118 16.0162 2.59734C16.049 2.79349 16.0026 2.99465 15.8871 3.15657L15.5011 3.69757C16.1271 4.17157 16.2661 5.06157 15.8071 5.70457L15.3971 6.28057C15.3399 6.36081 15.2675 6.429 15.184 6.48124C15.1004 6.53349 15.0074 6.56876 14.9102 6.58506C14.813 6.60136 14.7136 6.59835 14.6176 6.57622C14.5216 6.55409 14.4309 6.51327 14.3506 6.45607C14.2704 6.39888 14.2022 6.32645 14.15 6.24291C14.0977 6.15936 14.0624 6.06635 14.0461 5.96917C14.0298 5.87199 14.0328 5.77256 14.055 5.67654C14.0771 5.58053 14.1179 5.48981 14.1751 5.40957L14.5611 4.86757C14.2591 4.63857 14.0582 4.30086 14.001 3.92614C13.9439 3.55142 14.035 3.16919 14.2551 2.86057L14.6661 2.28557C14.7816 2.12368 14.9567 2.01429 15.1529 1.98148C15.349 1.94866 15.5502 1.9951 15.7121 2.11057Z" fill="#9C9C9C"/>
//                                     </svg>',
//     'Cold Coffee' => '<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
//                                     <path d="M19.0938 0L15.8904 18.3009C15.7107 19.3159 14.8331 20.0877 13.7759 20.0877H5.31794C4.2607 20.0877 3.38318 19.3159 3.20345 18.3009L0 0H19.0938ZM2.52682 2.11449L5.31794 17.9732H13.7759L16.567 2.11449H2.52682ZM6.37519 15.8587V11.6297H10.6042V15.8587H6.37519ZM10.6042 10.7628L7.24213 7.40071L10.6042 4.03867L13.9662 7.40071L10.6042 10.7628Z" fill="#9C9C9C"/>
//                                     </svg>',
//     'Non-Coffee' => '<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
//                                     <path d="M7.18408 15.7443C5.23408 15.7443 3.58008 15.0653 2.22208 13.7073C0.864082 12.3493 0.184749 10.6949 0.184082 8.74426V2.74426C0.184082 2.19426 0.380082 1.7236 0.772082 1.33226C1.16408 0.940929 1.63475 0.744929 2.18408 0.744263H14.6841C15.6507 0.744263 16.4757 1.08593 17.1591 1.76926C17.8424 2.4526 18.1841 3.2776 18.1841 4.24426C18.1841 5.21093 17.8424 6.03593 17.1591 6.71926C16.4757 7.4026 15.6507 7.74426 14.6841 7.74426H14.1841V8.74426C14.1841 10.6943 13.5051 12.3486 12.1471 13.7073C10.7891 15.0659 9.13475 15.7449 7.18408 15.7443ZM2.18408 5.74426H12.1841V2.74426H2.18408V5.74426ZM7.18408 13.7443C8.56742 13.7443 9.74675 13.2566 10.7221 12.2813C11.6974 11.3059 12.1847 10.1269 12.1841 8.74426V7.74426H2.18408V8.74426C2.18408 10.1276 2.67175 11.3069 3.64708 12.2823C4.62242 13.2576 5.80142 13.7449 7.18408 13.7443ZM14.1841 5.74426H14.6841C15.1007 5.74426 15.4551 5.5986 15.7471 5.30726C16.0391 5.01593 16.1847 4.6616 16.1841 4.24426C16.1834 3.82693 16.0377 3.47293 15.7471 3.18226C15.4564 2.8916 15.1021 2.7456 14.6841 2.74426H14.1841V5.74426ZM0.184082 18.7443V16.7443H16.1841V18.7443H0.184082Z" fill="#9C9C9C"/>
//                                     </svg>'
// ];
    'Hot Coffee' => [
        'svg' => '<svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.01917 12.0496C3.88617 10.0496 3.81917 9.05057 4.41217 8.41757C5.00517 7.78357 6.00717 7.78357 8.01117 7.78357H13.4602C15.4632 7.78357 16.4652 7.78357 17.0582 8.41757C17.2202 8.59057 17.3332 8.79157 17.4082 9.03357H17.7352C20.2612 9.03357 22.4852 10.8456 22.4852 13.2836C22.4852 15.7216 20.2612 17.5336 17.7352 17.5336H17.0852L17.0502 18.0336H4.42017C4.40083 17.7669 4.3815 17.4836 4.36217 17.1836L4.01917 12.0496ZM17.1852 16.0336H17.7352C19.6272 16.0336 20.9852 14.7116 20.9852 13.2836C20.9852 11.8556 19.6272 10.5336 17.7352 10.5336H17.5352C17.5232 10.9636 17.4902 11.4636 17.4512 12.0496L17.1852 16.0336Z" fill="currentColor"/>
                                <path d="M4.5542 19.5336H16.9162C16.7722 20.7106 16.5382 21.4506 15.9782 21.9736C15.1132 22.7836 13.7822 22.7836 11.1222 22.7836H10.3482C7.6882 22.7836 6.3582 22.7836 5.4922 21.9736C4.9322 21.4506 4.6982 20.7106 4.5542 19.5336Z" fill="currentColor"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71213 2.11057C7.87402 2.22609 7.98341 2.40118 8.01623 2.59734C8.04904 2.79349 8.00261 2.99465 7.88713 3.15657L7.50113 3.69757C8.12713 4.17157 8.26613 5.06157 7.80713 5.70457L7.39713 6.28057C7.28163 6.44262 7.10648 6.55215 6.91023 6.58506C6.71397 6.61797 6.51268 6.57158 6.35063 6.45607C6.18858 6.34057 6.07905 6.16543 6.04614 5.96917C6.01323 5.77291 6.05963 5.57162 6.17513 5.40957L6.56113 4.86757C6.25907 4.63857 6.05816 4.30086 6.00103 3.92614C5.94389 3.55142 6.03504 3.16919 6.25513 2.86057L6.66613 2.28557C6.78164 2.12368 6.95673 2.01429 7.15289 1.98148C7.34905 1.94866 7.55021 1.9951 7.71213 2.11057ZM11.7121 2.11057C11.874 2.22609 11.9834 2.40118 12.0162 2.59734C12.049 2.79349 12.0026 2.99465 11.8871 3.15657L11.5011 3.69757C12.1271 4.17157 12.2661 5.06157 11.8071 5.70457L11.3971 6.28057C11.3399 6.36081 11.2675 6.429 11.184 6.48124C11.1004 6.53349 11.0074 6.56876 10.9102 6.58506C10.813 6.60136 10.7136 6.59835 10.6176 6.57622C10.5216 6.55409 10.4309 6.51327 10.3506 6.45607C10.2704 6.39888 10.2022 6.32645 10.15 6.24291C10.0977 6.15936 10.0624 6.06635 10.0461 5.96917C10.0298 5.87199 10.0328 5.77256 10.055 5.67654C10.0771 5.58053 10.1179 5.48981 10.1751 5.40957L10.5611 4.86757C10.2591 4.63857 10.0582 4.30086 10.001 3.92614C9.94389 3.55142 10.035 3.16919 10.2551 2.86057L10.6661 2.28557C10.7816 2.12368 10.9567 2.01429 11.1529 1.98148C11.349 1.94866 11.5502 1.9951 11.7121 2.11057ZM15.7121 2.11057C15.874 2.22609 15.9834 2.40118 16.0162 2.59734C16.049 2.79349 16.0026 2.99465 15.8871 3.15657L15.5011 3.69757C16.1271 4.17157 16.2661 5.06157 15.8071 5.70457L15.3971 6.28057C15.3399 6.36081 15.2675 6.429 15.184 6.48124C15.1004 6.53349 15.0074 6.56876 14.9102 6.58506C14.813 6.60136 14.7136 6.59835 14.6176 6.57622C14.5216 6.55409 14.4309 6.51327 14.3506 6.45607C14.2704 6.39888 14.2022 6.32645 14.15 6.24291C14.0977 6.15936 14.0624 6.06635 14.0461 5.96917C14.0298 5.87199 14.0328 5.77256 14.055 5.67654C14.0771 5.58053 14.1179 5.48981 14.1751 5.40957L14.5611 4.86757C14.2591 4.63857 14.0582 4.30086 14.001 3.92614C13.9439 3.55142 14.035 3.16919 14.2551 2.86057L14.6661 2.28557C14.7816 2.12368 14.9567 2.01429 15.1529 1.98148C15.349 1.94866 15.5502 1.9951 15.7121 2.11057Z" fill="currentColor"/>
                                </svg>'
    ],

    'Cold Coffee' => [
        'svg' => '<svg width="20" height="20" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.0938 0L15.8904 18.3009C15.7107 19.3159 14.8331 20.0877 13.7759 20.0877H5.31794C4.2607 20.0877 3.38318 19.3159 3.20345 18.3009L0 0H19.0938ZM2.52682 2.11449L5.31794 17.9732H13.7759L16.567 2.11449H2.52682ZM6.37519 15.8587V11.6297H10.6042V15.8587H6.37519ZM10.6042 10.7628L7.24213 7.40071L10.6042 4.03867L13.9662 7.40071L10.6042 10.7628Z" fill="currentColor"/>
                                    </svg>'
    ],

    'Non-Coffee' => [
        'svg' => '<svg width="20" height="20" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.18408 15.7443C5.23408 15.7443 3.58008 15.0653 2.22208 13.7073C0.864082 12.3493 0.184749 10.6949 0.184082 8.74426V2.74426C0.184082 2.19426 0.380082 1.7236 0.772082 1.33226C1.16408 0.940929 1.63475 0.744929 2.18408 0.744263H14.6841C15.6507 0.744263 16.4757 1.08593 17.1591 1.76926C17.8424 2.4526 18.1841 3.2776 18.1841 4.24426C18.1841 5.21093 17.8424 6.03593 17.1591 6.71926C16.4757 7.4026 15.6507 7.74426 14.6841 7.74426H14.1841V8.74426C14.1841 10.6943 13.5051 12.3486 12.1471 13.7073C10.7891 15.0659 9.13475 15.7449 7.18408 15.7443ZM2.18408 5.74426H12.1841V2.74426H2.18408V5.74426ZM7.18408 13.7443C8.56742 13.7443 9.74675 13.2566 10.7221 12.2813C11.6974 11.3059 12.1847 10.1269 12.1841 8.74426V7.74426H2.18408V8.74426C2.18408 10.1276 2.67175 11.3069 3.64708 12.2823C4.62242 13.2576 5.80142 13.7449 7.18408 13.7443ZM14.1841 5.74426H14.6841C15.1007 5.74426 15.4551 5.5986 15.7471 5.30726C16.0391 5.01593 16.1847 4.6616 16.1841 4.24426C16.1834 3.82693 16.0377 3.47293 15.7471 3.18226C15.4564 2.8916 15.1021 2.7456 14.6841 2.74426H14.1841V5.74426ZM0.184082 18.7443V16.7443H16.1841V18.7443H0.184082Z" fill="currentColor"/>
                                    </svg>'
    ]
];

/* :if no category is set in the URL, redirect to the default "all" category
   :so the controller can load and the view shows "All Coffee" by default.
   :a relative query that allows us to stay on the same page but with the category set*/
if (!isset($_GET['category']) || $_GET['category'] === '') {
    header('Location: ?category=all');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Brew & Bean 2.0</title>
    <link rel="stylesheet" href="../src/styles/addCart.css">
    <link rel="stylesheet" href="../src/styles/global.css">
    <link rel="stylesheet" href="../src/styles/modal.css">
</head>

<body>
    <div class="layout">
        <?php
        include "./partials/nav.php";
        ?>
        <!-- PAGITAN -->



        <main class="main-content">

            <!--products section-->
            <div class="product-content">


                <div class="category">
                    <div class="stickyHeader">
                        <div class="category_header">
                            <a class="header<?php echo (isset($_GET['category']) && $_GET['category'] === 'all') ? ' active' : ''; ?>"
                                href="?category=all">

                                <svg viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.490234 16.4539V0.595215H2.25231V16.4539H0.490234ZM4.01438 10.2866C4.01438 10.053 4.10721 9.82887 4.27243 9.66364C4.43766 9.49841 4.66176 9.40559 4.89542 9.40559H11.9437C12.1774 9.40559 12.4015 9.49841 12.5667 9.66364C12.7319 9.82887 12.8248 10.053 12.8248 10.2866V14.6918C12.8248 14.9255 12.7319 15.1496 12.5667 15.3148C12.4015 15.48 12.1774 15.5729 11.9437 15.5729H4.89542C4.66176 15.5729 4.43766 15.48 4.27243 15.3148C4.10721 15.1496 4.01438 14.9255 4.01438 14.6918V10.2866ZM4.89542 1.47625C4.66176 1.47625 4.43766 1.56908 4.27243 1.7343C4.10721 1.89953 4.01438 2.12362 4.01438 2.35729V6.76248C4.01438 6.99614 4.10721 7.22024 4.27243 7.38546C4.43766 7.55069 4.66176 7.64351 4.89542 7.64351H15.4679C15.7015 7.64351 15.9256 7.55069 16.0909 7.38546C16.2561 7.22024 16.3489 6.99614 16.3489 6.76248V2.35729C16.3489 2.12362 16.2561 1.89953 16.0909 1.7343C15.9256 1.56908 15.7015 1.47625 15.4679 1.47625H4.89542Z"
                                        fill="currentColor" />
                                </svg>

                                All Coffee
                            </a>

                            <?php while ($cat = $categories->fetch_assoc()): ?>
                            <?php
                                $categoryName = $cat['name'];
                                $categoryId = $cat['id'];
                                $icon = $icons[$categoryName]['svg'] ?? '';
                                ?>
                            <a class="header<?php echo (isset($_GET['category']) && $_GET['category'] == $categoryId) ? ' active' : ''; ?>"
                                href="?category=<?php echo $categoryId; ?>">
                                <?php echo $icon; ?>
                                <?php echo htmlspecialchars($categoryName); ?>
                            </a>
                            <?php endwhile; ?>

                        </div>
                        <!-- <div class="search-container"> -->
                        <div class="searchProduct">
                            <input type="text" id="search-product" name="search" placeholder="Search all products">
                            <button>Search</button>
                        </div>
                        <!-- </div> -->
                    </div>


                    <?php if (isset($_GET['category'])): ?>

                    <?php if ($products): ?>

                    <!-- Product Cards -->
                    <div class="card-container">
                        <?php while ($prod = $products->fetch_assoc()): ?>
                        <!-- <?php
                                    echo "<pre>";
                                    print_r($prod);
                                    echo "</pre>";
                                    ?> -->
                        <!-- <div class="card">
                                        <img src="assets/images/<?php echo htmlspecialchars($prod['image_filename']); ?>"
                                            alt="picture" width="150" height="150">
                                        <h4><?php echo htmlspecialchars($prod['product']); ?></h4>
                                        <p>₱<?php echo number_format($prod['price'], 2); ?></p>
                                        <p><?php echo htmlspecialchars($prod['quantity']); ?></p>
                                    </div> -->

                        <!-- data-id="<?= $prod['id']; ?>" -->
                        <div class="card">
                            <div class="item-description">
                                <img src="assets/images/<?php echo htmlspecialchars($prod['image_filename']); ?>"
                                    alt="picture" width="150" height="150">
                                <div class="if-second-card">
                                    <h4><?php echo htmlspecialchars($prod['product']); ?></h4>
                                    <h5>Stock: <?php echo htmlspecialchars($prod['quantity']); ?></h5>
                                    <p>₱<?php echo number_format($prod['price'], 2); ?></p>
                                </div>

                            </div>

                            <form class="addToCartForm" action="" method="POST">
                                <input type="hidden" name="price"
                                    value="<?php echo number_format($prod['price'], 2); ?>">
                                <input type="hidden" name="name"
                                    value="<?php echo htmlspecialchars($prod['product']); ?>">
                                <div class="item-properties">
                                    <div class="item-properties-card">
                                        <p class="title">
                                            Size
                                        </p>
                                        <div class="ip-variety">
                                            <label class="size-label">
                                                <input type="radio" name="size" placeholder="S" value="S" />
                                                <span>S</span>
                                            </label>
                                            <label class="size-label">
                                                <input type="radio" name="size" placeholder="M" value="M" />
                                                <span>M</span>
                                            </label>
                                            <label class="size-label">
                                                <input type="radio" name="size" placeholder="L" value="L" />
                                                <span>L</span>
                                            </label>
                                            <!-- <button type="button" onclick="addToCart(<?= $prod['id']; ?>, 'S', 25)">S</button>
                                                        <button type="button" onclick="addToCart(<?= $prod['id']; ?>, 'M', 50)">M</button>
                                                        <button type="button" onclick="addToCart(<?= $prod['id']; ?>, 'L', 100)">L</button> -->
                                            <!-- <button type="button" data-value="S">S</button>
                                                    <button type="button" data-value="M">M</button>
                                                    <button type="button" data-value="L">L</button> -->
                                        </div>
                                    </div>

                                    <div class="item-properties-card">
                                        <p class="title">
                                            Sugar (%)
                                        </p>
                                        <div class="ip-variety">
                                            <label class="sugar-label">
                                                <input type="radio" name="sugar" placeholder="25%" value="25">
                                                <span>25</span>
                                            </label>
                                            <label class="sugar-label">
                                                <input type="radio" name="sugar" placeholder="50%" value="50">
                                                <span>50</span>
                                            </label>
                                            <label class="sugar-label">
                                                <input type="radio" name="sugar" placeholder="100%" value="100">
                                                <span>100</span>
                                            </label>
                                            <!-- <button type="button" onclick="addToCart(<?= $prod['id']; ?>, 'S', 25)">25%</button>
                                                        <button type="button" onclick="addToCart(<?= $prod['id']; ?>, 'M', 50)">50%</button>
                                                        <button type="button" onclick="addToCart(<?= $prod['id']; ?>, 'L', 100)">100%</button> -->
                                            <!-- <button type="button" data-value="25">25</button>
                                                    <button type="button" data-value="50">50</button>
                                                    <button type="button" data-value="100">100</button> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="button_itemProperties">
                                    <button type="submit" name="addToCart">+ Add</button>
                                    <!-- onclick="addToCart(<?= $prod['id']; ?>)"  -->
                                    <!-- <button type="button" class="addBtn">+ Add</button> -->
                                </div>
                            </form>
                        </div>

                        <?php endwhile; ?>
                    </div>

                    <!-- <?php else: ?>
                                    <div class="card-container">
                                        <div class="no-selection-message">
                                            <h1>No products in this category.</h1>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php else: ?>
                                    <div class="card-container">
                                        <div class="no-selection-message">
                                            <h1>No category selected.</h1>
                                        </div>
                                    </div>
                                <?php endif; ?> -->

                </div>

            </div>



            <!--cart section-->
            <div class="cart-content">

                <div class="cart">

                    <div class="top-cart">
                        <div class="cashier">
                            <?php $placeholderJohnDoe = "John Doe"; ?>
                            <div>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.09446 0.431641C5.75436 0.431641 6.38723 0.695787 6.85385 1.16597C7.32047 1.63616 7.58261 2.27386 7.58261 2.9388C7.58261 3.60374 7.32047 4.24145 6.85385 4.71163C6.38723 5.18182 5.75436 5.44596 5.09446 5.44596C4.43457 5.44596 3.8017 5.18182 3.33508 4.71163C2.86846 4.24145 2.60631 3.60374 2.60631 2.9388C2.60631 2.27386 2.86846 1.63616 3.33508 1.16597C3.8017 0.695787 4.43457 0.431641 5.09446 0.431641ZM5.09446 6.69954C7.84387 6.69954 10.0708 7.8215 10.0708 9.20671V10.4603H0.118164V9.20671C0.118164 7.8215 2.34506 6.69954 5.09446 6.69954Z" />
                                </svg>
                            </div>
                            <p><?= $placeholderJohnDoe; ?></p>
                            <a href="changeCashier">
                                <svg width="24" height="24" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.41154 24.5937C1.74608 24.5937 1.17661 24.357 0.703132 23.8835C0.22965 23.41 -0.00749417 22.8402 -0.00830078 22.1739V5.23504C-0.00830078 4.56958 0.228844 4.00011 0.703132 3.52663C1.17742 3.05315 1.74689 2.81601 2.41154 2.8152H10.3063C10.7096 2.8152 11.012 2.94143 11.2137 3.1939C11.4154 3.44637 11.5162 3.72345 11.5162 4.02512C11.5162 4.32679 11.4105 4.60427 11.1992 4.85754C10.9879 5.11082 10.6801 5.23665 10.276 5.23504H2.41154V22.1739H19.3504V14.2792C19.3504 13.8759 19.4766 13.5734 19.7291 13.3717C19.9816 13.1701 20.2587 13.0693 20.5603 13.0693C20.862 13.0693 21.1395 13.1701 21.3928 13.3717C21.646 13.5734 21.7719 13.8759 21.7703 14.2792V22.1739C21.7703 22.8394 21.5335 23.4092 21.06 23.8835C20.5865 24.3578 20.0167 24.5946 19.3504 24.5937H2.41154ZM7.25122 16.1243V13.1903C7.25122 12.8676 7.31171 12.5599 7.4327 12.2671C7.5537 11.9743 7.7251 11.7174 7.94692 11.4964L18.3522 1.09106C18.5942 0.84908 18.8664 0.667592 19.1689 0.5466C19.4714 0.425608 19.7739 0.365112 20.0764 0.365112C20.399 0.365112 20.7067 0.425608 20.9995 0.5466C21.2923 0.667592 21.5593 0.84908 21.8005 1.09106L23.4944 2.8152C23.7162 3.05718 23.8876 3.32458 24.0086 3.61738C24.1296 3.91018 24.1901 4.20741 24.1901 4.50909C24.1901 4.81076 24.1348 5.1084 24.0243 5.40201C23.9138 5.69561 23.7372 5.9626 23.4944 6.20297L13.0891 16.6083C12.8673 16.8301 12.6104 17.0067 12.3184 17.1382C12.0264 17.2697 11.7186 17.335 11.3952 17.3342H8.46114C8.11833 17.3342 7.83117 17.2181 7.59967 16.9858C7.36818 16.7535 7.25202 16.4663 7.25122 16.1243ZM9.67106 14.9144H11.3649L18.3825 7.89686L17.5355 7.04992L16.6583 6.20297L9.67106 13.1903V14.9144Z"
                                        fill="#FFFCFB" />
                                </svg>
                            </a>
                        </div>
                        <div class="cartItems">
                            <div class="orderItems"></div>
                        </div>
                    </div>

                    <div class="btm-cart">
                        <?php $placeholderMuna = "₱ 0.00" ?>
                        <div class="lalagyan">
                            <div class="linya">
                            </div>
                        </div>

                        <!-- <div class="billingPoMaem">
                            <table class="billing">
                                <tbody>
                                    <tr>
                                        <th class="redBrown" scope="row">Subtotal</th>
                                        <td class="redBrown"><?= $placeholderMuna; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="grey" scope="row">Discount (10%)</th>
                                        <td class="grey"><?= $placeholderMuna; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="grey" scope="row">VAT (12%)</th>
                                        <td class="grey"><?= $placeholderMuna; ?></td>
                                    </tr>
                                    <tr class="total">
                                        <th class="redBrown" scope="row">Total</th>
                                        <td class="redBrown"><?= $placeholderMuna; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                        <div class="billing-summary">
                            <h4>
                                Subtotal:
                                <div>₱<span id="subtotal">0.00</span></div>
                            </h4>
                            <h6>
                                Discount(10%):
                                <div>₱<span id="discount">0.00</span></div>
                            </h6>
                            <h6>
                                VAT(12%):
                                <div>₱<span id="vat">0.00</span></div>
                            </h6>
                            <h4>
                                Total:
                                <div>₱<span id="total">0.00</span></div>
                            </h4>
                        </div>

                        <div class="receiptPrint">
                            <button class="print" type="submit" name="submit">Print Receipt</button>
                        </div>
                    </div>
            </div>

            </div>


                
                      
            
            
            
        </main>
    </div>

     <!-- modal section --> 
    <div class="modal">

        <div class="modalContent">
            
            <div class="closeBtn">
                <button>X</button>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M160 336V48l32 16l32-16l31.94 16l32.37-16L320 64l31.79-16l31.93 16L416 48l32.01 16L480 48v224"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M480 272v112a80 80 0 0 1-80 80a80 80 0 0 1-80-80v-48H48a15.86 15.86 0 0 0-16 16c0 64 6.74 112 80 112h288"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M224 144h192m-128 80h128"/></svg>
            <h1 class="brew">Your order is on its way!</h1>
            <h2 class="bean">Brew & Bean</h2>
            
            <p>Address: 123 Lorem Ipsum, Makati City</p>
            <p class="tel">Tel: 8-7000</p>
            
        <div class="summary">
            <p class ="paymentSum">PAYMENT SUMMARY</p>

            <div class="table">
                <table class="tableContainer">

                    <thead class="tableHead">
                        <tr>
                            <th>ITEMS</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                        </tr>
                    </thead>

                    <tbody class="tableBody">
                        <!-- <tr>
                            <td>Kape</td>
                            <td>1</td>
                            <td>100.00</td>
                        </tr>
                        <tr>
                            <td>Kape</td>
                            <td>1</td>
                            <td>100.00</td>
                        </tr>
                        <tr>
                            <td>Kape</td>
                            <td>1</td>
                            <td>100.00</td>
                        </tr>
                        <tr class="lastRow">
                            <td>Kape</td>
                            <td>1</td>
                            <td>100.00</td>
                        </tr> -->
                    </tbody>
                    
                </table>
            </div>

            <div class="sf">Delivery Fee</div>
            <div class="total">Total</div>
        </div>

            <div class="barcodeImg">
            <img src="./assets/images/barcode.gif" alt="bar code"> </div>
            
        </div>
    </div>   
    </div>
    <!-- <script src="modal.js"></script> -->
    <script src="../src/js/index.js"></script>
    <script src="../src/js/printModal.js"></script>
</body>

</html>