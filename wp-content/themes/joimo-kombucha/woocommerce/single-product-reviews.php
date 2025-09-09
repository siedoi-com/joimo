<?php
/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.3.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! comments_open() ) {
	return;
}

?>
<div class="woocommerce-Reviews-Section">

		<div id="reviews" class="woocommerce-Reviews">


			<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>
				<div class="outuer_review_form_wrapper">
				<div id="review_form_wrapper">
					<div id="review_form">
						<?php
						$commenter    = wp_get_current_commenter();
						$comment_form = array(
							/* translators: %s is product title */
							'title_reply'         => have_comments() ? esc_html__( 'Write a new review', 'woocommerce' ) : sprintf( esc_html__( 'Be the first to review &ldquo;%s&rdquo;', 'woocommerce' ), get_the_title() ),
							/* translators: %s is product title */
							'title_reply_to'      => esc_html__( 'Leave a Reply to %s', 'woocommerce' ),
							'title_reply_before'  => '<span id="reply-title" class="comment-reply-title">',
							'title_reply_after'   => '</span>',
							'comment_notes_after' => '',
							'label_submit'        => esc_html__( 'Submit', 'woocommerce' ),
							'logged_in_as'        => '',
							'comment_field'       => '',
						);



						$account_page_url = wc_get_page_permalink( 'myaccount' );
						if ( $account_page_url ) {
							/* translators: %s opening and closing link tags respectively */
							$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %1$slogged in%2$s to post a review.', 'woocommerce' ), '<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) . '</p>';
						}

						if ( wc_review_ratings_enabled() ) {
							$comment_form['comment_field'] = '<div class="comment-form-rating"><label for="rating">' . esc_html__( 'Your rating', 'woocommerce' ) . ( wc_review_ratings_required() ? '&nbsp;<span class="required">*</span>' : '' ) . '</label><select name="rating" id="rating" required>
								<option value="">' . esc_html__( 'Rate&hellip;', 'woocommerce' ) . '</option>
								<option value="5">' . esc_html__( 'Perfect', 'woocommerce' ) . '</option>
								<option value="4">' . esc_html__( 'Good', 'woocommerce' ) . '</option>
								<option value="3">' . esc_html__( 'Average', 'woocommerce' ) . '</option>
								<option value="2">' . esc_html__( 'Not that bad', 'woocommerce' ) . '</option>
								<option value="1">' . esc_html__( 'Very poor', 'woocommerce' ) . '</option>
							</select></div>';
						}

						$name_email_required = (bool) get_option( 'require_name_email', 1 );
						$fields              = array(
							'author' => array(
								'label'    => __( 'Name', 'woocommerce' ),
								'type'     => 'text',
								'value'    => $commenter['comment_author'],
								'required' => $name_email_required,
							),
							'email'  => array(
								'label'    => __( 'Email', 'woocommerce' ),
								'type'     => 'email',
								'value'    => $commenter['comment_author_email'],
								'required' => $name_email_required,
							),
						);

						$comment_form['fields'] = array();

						foreach ( $fields as $key => $field ) {
							$field_html  = '<p class="comment-form-' . esc_attr( $key ) . '">';
							$field_html .= '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] );

							if ( $field['required'] ) {
								$field_html .= '&nbsp;<span class="required">*</span>';
							}

							$field_html .= '</label><input id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" placeholder="'. esc_html( $field['label'] ) .'" type="' . esc_attr( $field['type'] ) . '" value="' . esc_attr( $field['value'] ) . '" size="30" ' . ( $field['required'] ? 'required' : '' ) . ' /></p>';

							$comment_form['fields'][ $key ] = $field_html;
						}


						$comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Review', 'woocommerce' ) . '&nbsp;<span class="required">*</span></label><textarea placeholder="Write your review here" id="comment" name="comment" cols="45" rows="8" required></textarea></p>';

						comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
						?>
					</div>


					<div class="form_bg_section">
											<svg width="1172" height="486" viewBox="0 0 1172 486" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="1172" height="486">
							<rect x="0.91748" width="1171" height="486" fill="white"/>
							</mask>
							<g mask="url(#mask0)">
							<rect x="545.917" y="353.642" width="547.785" height="408.722" transform="rotate(-32.2916 545.917 353.642)" fill="url(#pattern0)"/>
							</g>
							<defs>
							<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
							<use xlink:href="#image0" transform="scale(0.0018018 0.00241546)"/>
							</pattern>
							<image id="image0" width="555" height="414" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAisAAAGeCAYAAABVQUFzAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAACK6ADAAQAAAABAAABngAAAAB4c3i6AAA4BUlEQVR4Ae2dy5IcR5aeiwRJ8NIYZLNppKmlHlSvxmy0QMlMMi2ZvZJJG5SeAMGddig+ARNP0IUnYOIJVNho24G1FlO10EJjJuvEjIxt3eoeFoYDkgBIQv9JRFRFZUZmxj388oWZI+7u53wnsvDncQ/PN169erXHAgEIQAACEIAABFwl8KarhmEXBCAAAQhAAAIQMAKIFZ4DCEAAAhCAAAScJoBYcTo8GAcBCEAAAhCAAGKFZwACEIAABCAAAacJIFacDg/GQQACEIAABCCAWOEZgAAEIAABCEDAaQKIFafDg3EQgAAEIAABCCBWeAYgAAEIQAACEHCaAGLF6fBgHAQgAAEIQAACiBWeAQhAAAIQgAAEnCaAWHE6PBgHAQhAAAIQgABihWcAAhCAAAQgAAGnCSBWnA4PxkEAAhCAAAQggFjhGYAABCAAAQhAwGkCiBWnw4NxEIAABCAAAQggVngGIAABCEAAAhBwmgBixenwYBwEIAABCEAAAogVngEIQAACEIAABJwmgFhxOjwYBwEIQAACEIAAYoVnAAIQgAAEIAABpwkgVpwOD8ZBAAIQgAAEIIBY4RmAAAQgAAEIQMBpAogVp8ODcRCAAAQgAAEIIFZ4BiAAAQhAAAIQcJoAYsXp8GAcBCAAAQhAAAKIFZ4BCEAAAhCAAAScJoBYcTo8GAcBCEAAAhCAwFsggMCYBP7tf/kP+2rfSr4caGOS71RYp9k1ds9UJVG5qfJI5cTK//of//NcaxYIQAACEPCUwBuvXr3y1HTM9oFAQYwcyN5cUJjpn45o/+NC22m2vdDaii0LCZzFcot/IAABCEBgdAKIldFDEIYBEiVFMbIvr6yMKUjUfKfLmWrLMzQLbRfLKdkbEWGBAAQg0BMBxEpPYEOsdkOWxLIlt0P0t6ZPT3X9qUqarS07Y/ssEIAABCDQkgBipSXAEG+XKJnKr/2s2DaCRBBaLMWsjFVjIuY8K7ZNt5MgsEAAAhDYRACxsolMJMez7pup3D1QsfUtFZZxCOSiJlXzJmZMyJyToREFFghAIGoCiJXIwi9xMpHLhyrTbG1vzrD4QcDEzEIltYKIEQUWCEAgCgKIlSjCvLeXde0kcteECgIljLg/kRupir2efRKGS3gBAQhAYJ0AYmWdSTBHJFD25UySFbp3BCLgxQb4mmBBuAQcZFyDQKwEECuBRb7QzZPItZBeHQ4sUr26Y8IlzYq9Vm3bLBCAAAS8JYBY8TZ0Vw2XSLHuHSt3r55hDwJLAtZldJqV1NYSMedas0AAAhBwngBixfkQbTawIFBMpDAOZTMqzpQTsAG7qYqJGBuwu9CaBQIQgIBzBBArzoVku0EIlO18ONuKwMWAXdVi4oXMSyuc3AwBCHRFALHSFcke60Gg9AiXqrcRsMzLiRUJF8u+sEAAAhAYhQBiZRTsuxtFoOxmxBWDErjIuki4mIBhgQAEIDAYAcTKYKh3N4RA2c2IK5wgcPGatKyhu8iJkGAEBMImgFgZOb4IlJEDQPNdEHikSvLuovMuKqQOCEAAAkUCiJUijQG2JU4mauYwK1OteYtHEFiCIYBwCSaUOAIBdwggVgaKhUTKgZo6UjGhgkAZiDvNjEogFy68Fj1qGGgcAv4TQKz0HMNMpByrGWaT7Zk11XtB4ExWzlXsDaOF1iwQgAAEdhJArOxE1OwCiZR93TlTYUZZQWCBQAkBhEsJFA5BAALrBBAr60xaHUGktMLHzfESyLuMLONyHi8GPIcABMoIIFbKqDQ4hkhpAI1bIFBOAOFSzoWjEIiWAGKlZegRKS0BcjsENhN4qlMnVpiIbjMkzkAgBgKIlYZRlkiZ6taZCgNnBYEFAj0TQLj0DJjqIeAyAcRKzeggUmoC43IIdE/Apv63jMtcGZfT7qunRghAwDUCiJWKEUGkVATFZRAYlgDCZVjetAaBUQggVnZgR6TsAMRpCLhD4EymzFWYw8WdmGAJBDohgFjZgBGRsgEMhyHgBwGEix9xwkoIVCKAWFnBJJGyr0PHKndWTrELAQj4SeCRzM7fKjr30wWshkDcBJZiJcsiTIVioQFr8xiRZCJlJt+ZcTbGBwCfYyGAcIkl0vgZFIE3/vY///tEHn1Z8MoGrB3FMq+BRMrE/M0KPzBYeBDYhEDgBB7KP+ZwCTzIuBcGARMrC7lyq8Qd+wZiosXOB7lIqCRy7FgFkRJkhHEKApUI2Be0A/2to4uoEi4ugsDwBEysvNrS7FOdO9aHeLblGu9OZd1e5tOn3hmPwRCAQB8ETLDMVNKQv6D1AY46ITAEgV1iJbfBPsiJPsRpfsDHddblY5mUuz7aj80QgMAgBOzv3YmKfVFbDNIijUAAAlsJmFiZ64qq/3k/1rXWNXS6tVYHT0qoHMmsmQpdPg7GB5Mg4CgB+5s38/2LmqNsMQsClQmYWNnX1SY+6vwn/lDX2wd4obXTS9blcywjbzttKMZBAAIuE7C/efZF7dxlI7ENAqESKL66fCIn6wgWY2IfYEuVmthxapFI2ZdBJlLuOGUYxkAAAr4SsDF89iXN/q6wQAACAxK4mBRO/7kfqN1Upa5gMXMtVTrXh3huO2Mu8mOi9o9UvhjTDtqGAASCJWB/7xL9vVsE6yGOQcAxAhdixezK/qM/0WbTt2Tsm8fcyhjZFtmfqO2Zyi0VFghAAAJ9Erivv3OzPhugbghA4DWBK2Ilh6L/9C0zMVNpkmXJq3miDRM+qT7Qtu5tkb1TVX6scru3RqgYAhCAwDoB+ztnY1l6/Ru33ixHIBAXgVKxYgiyLMtMm/dsv+ViGZelcLG1PtjnLetb3i4b97UxV2maCdKtLBCAAARaE3ikGqxrqJO/ba2toQIIBEZgo1jJ/cwEwZH2E5U2mZa8SlufqZh4MeFyagfqLJlNM91zt859XAsBCECgRwKWZTHBkvbYBlVDIEoCO8VKTiXLtCTat9Jld4tlXVIVEy/WZbTQunTJbDDhZKUr4VTaFgchAAEINCTAWJaG4LgNApsIVBYrxQokGg60n2Sla9Fg305SFRMvC5VzFWvvMCtdt6dqWSAAAQh0SsCyx4fbvnx12hqVQSBwAo3ESpGJhEsuImyNkCjCYRsCEIiZgGWNjyVYZjFDwHcIdEGgtVgpGoFwKdJgGwIQgMCSgGWLZxItc3hAAALNCHQqVoomFITLVMeZ96QIh20IQCBGAiZajlXmEi7nMQLAZwg0JdCbWCkalI1xmeqYdRXxmnERDtsQgEBsBEy02HiW09gcx18INCUwiFhZNU7iZapjB4Vye/Ua9iEAAQgETuAzuoYCjzDudUZgFLFSZn2WfTEBY9mXqQqDdQWBBQIQCJrAAwmWo6A9xDkIdEDAGbFS9EXCZaJ9Ey0zFca7CAILBCAQLIFH8swmkzsP1kMcg0BLAk6KlaJPEi72rWOmQqalCIZtCEAgJAI2L4sJltOQnMIXCHRFwHmxYo5mXUQn2iTL0lXkqQcCEHCRwOcSLMcuGoZNEBiTgBdixQBlXUP2rQPBMuYTQ9sQgEDfBB6rAcuyLPpuiPoh4AuBN30xNOvPPZS9NiskCwQgAIFQCdj0DqdZF3ioPuIXBGoR8CazknulD/BM21/k+6whAAEIBEyALEvAwcW16gS8EyvmmgTLQiu6gwwGCwQgEDoByyYfKbs8D91R/IPAJgLedAOtOMAAtBUg7EIAAsESsDchv9SXtLnKJFgvcQwCWwj4Klbm8omxK1sCyykIQCA4AnflUYpgCS6uOFSBgJdiJRtsS3alQoC5BAIQCIqA/TQJgiWokOJMFQJeipXMMRMrZFeqRJlrIACBkAiYYLG3hQ5CcgpfILCNgLdihezKtrByDgIQCJyAvWBgGRYES+CBxr3XBLwVK1kAya7wJEMAArESsIG3DLqNNfqR+e21WMmyK0eRxQx3IQABCOQEGMOSk2AdNAEv51lZjYhSoamOfbp6nH0IQAACkRA4k5/T7AtcJC7jZkwEvM6sFAJFdqUAg00IQCA6AmRYogt5XA4HIVb0beJUYbsfV+jwFgIQgMAVAiZYFgy6vcKEnUAIBCFWsljYYNsngcQFNyAAAQg0IWCDbnlLqAk57nGaQDBiJeurTZymjXEQgAAE+ieAYOmfMS0MTCAYsWLcJFhSrR7ZNgsEIACBiAkgWCIOfoiuByVWsgAlWjOzbYhPKz5BAAJ1CCBY6tDiWqcJBCdWsu6gmdPUMQ4CEIDAMARywTIdpjlagUA/BIKYZ6UMjUbE2xtCt8vOcQwCEIBAhAQ+05e5eYR+43IABILLrBRiwtwrBRhsQgAC0RP4Ul/ikugpAMBLAsGKlWyw7UMvo4LREIAABPohgGDphyu19kwgWLGScbPsCoNte36IqB4CEPCKAILFq3BhrBEIWqxkg23pDuJZhwAEIHCVAILlKg/2HCcQ7ADbInd+6LBIg20IQAACFwQYdHuBgg2XCQSdWSmAT7RNd1ABCJsQgAAERMAyLMeQgIDrBKIQK+oOWigQfCBdfxqxDwIQGIPAPQmW+RgN0yYEqhKIohsoh6EP5Km2mXslB8IaAhCAwCUBe3vyKBvrd3mULQg4QCCKzEqB81Fhm00IQAACELgkcFeb9ovNk8tDbEHADQJRiRXmXnHjocMKCEDAWQKWeUawOBueeA2LSqxkYbbsCoNt433m8RwCENhOAMGynQ9nRyAQnVjJ+mOPR2BNkxCAAAR8IYBg8SVSkdgZ1QDbYkzVL7vQ/q3iMbYhAAEIQOAKgTPtTRl0e4UJOyMQiC6zUmA8K2yzCQEIQAAC6wTIsKwz4cgIBKLNrBhrsisjPHE0CQEI+EiADIuPUQvI5pgzKxZGXmUO6GHGFQhAoDcCywxLb7VTMQR2EIharKgf9kR8Hu9gxGkIQAACENCEmspGzwEBgTEIRC1WMuCzMcDTJgQgAAEPCdyVYJl5aDcme04g6jEreez04bMMy518nzUEIAABCGwlwK81b8XDya4JkFl5TZSxK10/WdQHAQiETOBYX/IOQnYQ39wigFhRPDR2ZaHVA7dCgzUQgAAEnCVwU5bNJVgmzlqIYUERQKxchnOmzaeXu2xBAAIQgMAWAvaG0HzLeU5BoDMCiJUMZTZD46wzslQEAQhAIHwCd5RdoRs9/DiP7iEDbFdCoA/eQoeYhn+FC7sQgAAEthD4jb7wpVvOcwoCrQiQWVnHl6wf4ggEIAABCGwhcMKA2y10ONWaAGJlBWH27eDRymF2IQABCEBgMwEG3G5mw5kOCCBWyiFaHyyDbcvZcBQCEIBAGQEG3JZR4VgnBBArJRizV5mPS05xCAIQgAAENhOwAbf87dzMhzMNCTDAdgs4fehOddq+LbBAAAIQgEB1AsxwW50VV1YgQGZlOyTrDmKBAAQgAIF6BL5kwG09YFy9nQBiZQufbLAtM9tuYcQpCEAAAhsIpAiWDWQ4XJsAYmU3spkuYbDtbk5cAQEIQKBIgDeEijTYbkUAsbIDn7Ir57ok2XEZpyEAAQhAYJ2AjflL1w9zBAL1CCBWKvCSYDnRZcy9UoEVl0AAAhBYIXBb3UHzlWPsQqAWAcRKdVyJLqU7qDovroQABCCQE7grwXKc77CGQF0CiJWKxOgOqgiKyyAAAQiUE7gnwZKUn+IoBLYTQKxs53PlLN1BV3CwAwEIQKAuAXulOal7E9dDALFS/xlIdAvdQfW5cQcEIAABI3AswXIACgjUIYBYqUNL19IdVBMYl0MAAhC4SsBeaWYOlqtM2NtBALGyA1DZabqDyqhwDAIQgEBlAgiWyqi40AggVpo/B4lupTuoOT/uhAAE4iaAYIk7/rW8R6zUwnV5Md1BlyzYggAEINCQAIKlIbjYbkOstIg43UEt4HErBCAAgdcEECw8CTsJIFZ2Itp5QaIrnuy8igsgAAEIQGATAQTLJjIcXxJArLR8EOgOagmQ2yEAAQi8JoBg4UnYSACxshFN9RMSLKmuflD9Dq6EAAQgAIESAgiWEigc4m2gLp+BmSo767JC6oIABCAQIQEES4RB3+XyG69evdp1DecrEshmZfy7ipdzGQQgAAEIbCZgU0NMlbk+3XwJZ2IhQDdQh5HOPlSfd1glVUEAAhCIlQAZllgjX+I3mZUSKG0PKcNyojrutK2H+yEAAQhAYDn5JhmWyB8EMiv9PACJqmX8Sj9sqRUCEIiLgGVYTvQlcBKX23hbJIBYKdLoaDt7nflQ1VmfKwsEIAABCLQjcEu3248fIljacfT2bsRKT6GTYFmo6qkKgkUQWCAAAQi0JHBb9yNYWkL09XbESo+RywbcWoaFBQIQgAAE2hNAsLRn6GUNiJWewybBkqqJz3puhuohAAEIxELABMs8Fmfx8zUBxMoAT4IEy1zN8ErzAKxpAgIQiILAHY1fmUfhKU4uCfDq8oAPQvbhujtgkzQFAQhAIGQCD/VlMAnZQXx7TYDMyoBPQvahejhgkzQFAQhAIGQCd/Ul8ChkB/HtNQHEyvBPgn2wmINleO60CAEIhEngtxIsSZiu4VVOgG6gnMSAa32wJmouVbGBYiwQgAAEINCewL9T9vq0fTXU4CIBxMpIUZFg2VfT9sG6OZIJNAsBCEAgJAI2p9WBBMsiJKfw5TUBuoFGehKyD9RUzTNp3EgxoFkIQCAoAvbFj2n5gwrppTOIlUsWg29lKctk8IZpEAIQgECYBJiDJcy47iFWRg6sBMuJTGDSuJHjQPMQgEAwBGwOlqNgvMGRJQHGrDjyIOjDdSxT7jliDmZAAAIQ8J0AA259j2DBfsRKAcbYmxIsc9nApHFjB4L2IQCBEAjYeMB9Za/PQ3Amdh/oBnLrCbDUJXOwuBUTrIEABPwkYANuUz9Nx+pVAoiVVSIj7mffAKYy4cmIZtA0BCAAgVAI3M662EPxJ1o/ECuOhT4TLIcyi1eaHYsN5kAAAl4SuCfBknhpOUZfEGDMygUKtzb04ZrKot+5ZRXWQAACEPCSgH35m+rL4KmX1mM0ry67+gzoQ5XKts9dtQ+7IAABCHhEwMavzPUlcOKRzZhaIEA3UAGGa5sSLMeyiV9pdi0w2AMBCPhIwCaMm/loODbv7dEN5MFToG8Dlrq0DxoLBCAAAQi0I/CbLHPdrhbuHpQAmZVBcTdubKo7GXDbGB83QgACELggML/YYsMbAogVD0KlbwHnMnPqgamYCAEIQMB1Ard4O8j1EK3bh1hZZ+LkEQkW6wriN4ScjA5GQQACnhGYeWZv9OYiVjx6BCRY5jKXAbcexQxTIQABJwlYduXQScswqpQAYqUUi7sHJVgSWYdgcTdEWAYBCPhBIPHDTKw0ArwN5OlzwBtCngYOsyEAAZcI/FpfABcuGYQt5QTIrJRz8eHoVEae+WAoNkIAAhBwlMCRo3Zh1goBxMoKEF929W0gf0OILiFfgoadEICAawQSZaknrhmFPesEECvrTLw5YoKFMSzehAtDIQAB9wjYNPxkV9yLy5pFjFlZQ+LnAX07OJbl9/y0HqshAAEIjEbAJtzcz7LVoxlBw9sJkFnZzsebs/qg2bcD5mHxJmIYCgEIOEKA7IojgdhmBmJlGx3PzkmwzGXyb1SYmt+z2GEuBCAwKoFk1NZpfCcBxMpORH5dIMGSyuKpyhMVFghAAAIQ2E2AKfh3Mxr1CsTKqPj7aVyC5VQ1H6jwanM/iKkVAhAIj8AsPJfC8YgBtuHEstQTDbyd68Td0pMchAAEIACBIoHPsu704jG2HSBAZsWBIPRpgj54ieq3gbeMY+kTNHVDwAECz86/2fvzP/5x70+//2rvu2++dcAi70yYeWdxJAaTWYkk0MqwWLfQicqtSFzGTQh4SeD5t9/v/fTjTxe2//D85d7LFy8u9l98+1znf7zYzzdW78uPl63fef/dvWvXtn9XfffG+xe3vnfjg+X29fev77157drF8UA3yK44GFjEioNB6cukbKbGueq/01cb1AsBCFwSsOyGCYtcSLyQELHlpQTIDy9eXl7o2dZ7EjJvvfP23lvX394zIfN2tu2ZG5vMfaKM9P6mkxwfhwBiZRzuo7Yq0ZLIgGMVm1+ABQIQqEjgtfB4vnZ1MfthmY+XEiK5MFm7OOADJmIsa3P9vXczIXOZnfHM7fsSLDPPbA7aXMRK0OHd7FzWLTTXFbc3X8UZCMRFIB/nYULjR2VE8i6XPDMSF41uvDXxYpmXd9SFdF3blpGxteML2RXHAoRYcSwgQ5qTdQtZhoW3hYYET1ujEbAMiAkSGwPyfTYAFSEyTjhcFzHKrLwxDhlaLSOAWCmjEtkxuoUiC3hk7po4sbdknn39jdfjRGIJW7EraTk2RuNixlgQK2NQ39wmYmUzm6jO0C0UVbiDdtbGlTz7+l+UQXm2FCnFN2uCdjxQ56zbyESLDeT94Oc/G+ptpMcSK9NAkXrpFmLFy7D1YzTdQv1wpdb+COQDXm2MiQ1qtSxKjANb+yPsXs0fTG7sLUt/wsVm/p5KrJy75328FiFW4o39Rs8lWo508rcbL+AEBEYgYGNLbMDr8+9s/f3F68AjmEKTDhB4U/PE3Phosjf5+MPlm0cdmcRbQB2B7LoaxErXRAOpT4JlKldOVHi9OZCY+uSGZUwsS2ICxQbC2jYLBDYRsG6iG7+YSLw0/nNlM3wfKpuSbmqD4+MSQKyMy9/p1iVY9mWgCRZeb3Y6Uv4bl4sTEyV05fgfz7E8aJhtodtnrIDVaBexUgNWjJcyjiXGqA/js4kSe0sHcTIM79hasVejrYtox6BchIonDwZixZNAjW0m41jGjoD/7edv6bwWKM+u/P6N/97hgcsEbvzipkTL64G5BTsRKgUYrm8iVlyPkEP2MY7FoWB4Yko+5uSf//KUt3Q8iVnIZubdRBIvf69ZdP8jb/z4E23Eij+xcsLSrFsolTGMY3EiIu4ZkXfvMAmbe7HBor3lbxf967/5a5uv5Yl4HKucSLQsYOM2AcSK2/Fx1jqJFvuQ33PWQAwbjEDevcMkbIMhp6GGBCyz8su/uVX220TWJTS3QralIdyeb0Os9Aw45OolWA7l31yl8fuCIfMJ0bd82nrLnvygSdhYIOATgX/zt78uEyqrLjzSAXsL0jIu56sn2R+HAGJlHO7BtCrBsi9n7INNt1AwUb3qSC5QbM3U9VfZsOcPgY/3f9lkHpaH8tBEi/2NYxmRAGJlRPghNU23UDjRpFsnnFjiyWsCNz/5cO+jX33SBsdT3WyCxbqJ0jYVcW8zAoiVZty4q4SABMtUh+0DTbdQCR+XD+UCZZlFUQaFBQKhELDXlj/+9S+7dMcG5s6tSLgstGYZgABiZQDIMTUhwTKRv3OVOzH57aOvCBQfo4bNdQjYxHC/0jiVHhfrJpohWnoknFWNWOmfcZQtSLQcyfGZClkWh56AH56/XM4ay7wnDgUFU3ohYEIle0W5l/pXKn2gfRMt5yvH2e2IAGKlI5BUs05AgmVfR+cqn6qwjEQAgTISeJodjcDAQiX308a1HFtBtORIulsjVrpjSU0bCJBl2QCmx8M2c+w3mjWW393pETJVO0lgJKFSZGGi5UiCZV48yHY7AoiVdvy4uyIBxrJUBNXislygMHNsC4jc6jUBB4RKkZ8NxLWuoXnxINvNCCBWmnHjroYEJFqmunWuckuFpSUBe3tnOb39198wSVtLltzuNwHHhEoRJqKlSKPhNmKlIThua0dAomWmGmwQLgNwa6JkkraawLg8eAIOC5Ui+zPtWPdQWjzIdjUCiJVqnLiqBwJZ15ANSLvbQ/VBVYlACSqcONMhAZtH5aO//sR+mLDDWnut6rFqt+6htNdWAqscsRJYQH10R6LlQHabaOGtoZUAWhfPV//bssgsEIDAKoEeJnxbbaLPfURLDbqIlRqwuLRfAhIth2rBREv041lMpNivGD/94z/xezz9PnbU7ikBz4VKkfoj7Vj30KJ4kO2rBBArV3mw5wABiZYjmTFTiWY8C7PJOvDgYYI3BAISKkXmD7XDbLhFIoVtxEoBBpvuEMjGs5ho+cIdq7q3xETKubInZFC6Z0uNYRJo+OvJvsCwOVosu8zEcisRQ6ysAGHXLQISLfuyaKYS3CDcf/rq/yFSFFgWCFQh8Oa1N5c/SPjB5EaVy32/xgaqMUdLIYqIlQIMNt0lINFyIOvsG4f3g3BtPMqffv8V86K4+7hhmWME7NXkj/f/1d51rSNbbBCujWc5jczvNXcRK2tIOOAyAYmWqeybqXgnWuw3ev78j39c/pCg7GeBAAQqEPDw1eQKXtW+5IHusEzLee07PbthJZtu3WIm1uaIFc8CibmvCeiBPtSWZVpuuc6EcSmuRwj7XCQQWbdPlRBc/Mdd5WLfrtHf9IlsnqncK7H914iVEioc8oeAHvBE1s5UnBQtNpnbn//hj3T5KEAsEKhK4OYnH+59+MuPfJroraprXVxnXUNJSK86Z3/H7cvnpjdA7yNWunh0qGN0Aq6JFuvy+dPiq+Xv9owOBwMg4AmB9268v/eLX30S49iUJhG6L8Eya3KjK/fo7/ZUtphIub3DJsTKDkCc9oyAC6LFsik2gPanH3/yjB7mQmAcAjYuxbIpEQ6gbQvc3hqyLEvatqIh789EykxtVh17+F/JrAwZIdoajECDD0Nr22xsyp9+/wcG0LYmSQUxEHjrnbf3bnx0c++vfjHZe+v62zG43KePD1W5DUQ977ORtnU3/Lt8Jr8OECtt6XO/0wSyD0eVNGMrP8imtMLHzRERsHlSTKREMl/KkJG1Abj2xpD9vXNqaShSzAfzaSqfThErToUUY/ogoA/KRPWeqFRNOVY24/m33+/9Ra8j29wpLBCAQDkBEybL8vOfMWi2HFGXR89UmWVZ0i4rrVtX9nc30X1HKk1egLgQKtY2YsUosERBQB+efTl6qNL0w3PBycSJTZFvGRUWCEBgnQACZZ3JwEcG7xrKBIr9jbVyp4W/9sbToQTXeV4HYiUnwToqAvpQHcjhRMU+VJVVP68iixYLBEoI2Lwor7MnN/bsrZ43r10ruYpDAxPovWso+1s6lV/2t7Rt9nqjvYiVgZ8cmnOPQEG4JLKu9D1/Bs+6FzcsGp+ATYNvwsTe5uFNnvHjscWCzt4aKmRPpmrPSuUve7p227I1E4RY2YaOc9ER0AfRvh3kZSlcbM6UP/yf/7v3QuNTWCAQMwHLnrx344NlBsVECm/xePc0WPdKrQnlMnEy1X152TUnii6tvFgm5UTFBgYvtt2FWNlGh3NREzDh8v2z7/7bH/7+H/4Tc6ZE/ShE7by9YvzBz1937Vg3D0sQBCyLUSoQehYnObwzbcytFMel5CfL1oiVMiocg4AI6EM70+oL6wJ69vW/LAfTMqCWRyMGAta981fq2jFxQvYk6IhbpiXNPNzXeqrSVbeOqrqyPNGeZVFMoJxeOVNhB7FSARKXxEVAImVfHtuHai3dmQuXb/5yzuvKcT0WwXvL2zvBh3gMBy2Dkqo0EihFgxErRRpsR08gz6ZUAWFjWSzT8s9/ecp4lirAuMY5AggU50ISgkF5F8/JrnEodZxFrNShxbXBEpBIOZBzc5W1bEpVp028PP/u+2XGxeZhYUBuVXJcNyQB6+KZfPyhxqEwQduQ3ANu66l8s0x0auuqY1B0ba0FsVILFxeHRkAiZSKfZir3uvbNxIuJFsu+MNala7rUV4cAv8NThxbX7iBg4iTNS5PxJzvqLz2NWCnFwsEYCEioTOXnXKWvAWWq+nIx4fLdN8/2vl+umZ7/kgxbfRCwDMoHk58tB8kyB0ofhKOo0wbgLrKS2rrLrh3VV3lBrFRGxYUhEagzNqUvvxEvfZGNt14bg2Lzn/AWT7zPQEvPH+n+1MpQGZOq9iJWqpLiuiAIZN0+1r/adlroznkUxYv9QCJzu3SOOLgKTZi8q2ITtdk2CwQaELBunWMVe2Nn0eD+QW5BrAyCmUZcICChsi87TKg0HkQ7pB8mWPIuI+s+QrwMSd+9tmz2WOvOQZy4FxuPLbJunsRlkZKzRazkJFgHTUBC5UAOpio3fXU0Fy82WNeyMCzhEigKExMo1997l8nZwg33WJ49lEhJxmq8bruIlbrEuN47AiEIlTLouWh59vU3ez+8eFl2Ccc8IGADYd/WlPbvvH992Z1j28wa60Hg/DbRK6FiqBErfj9wWL+DQKhCZdXtfIK6fNwLXUarhMbdzzMl9gqxCREbY5IfG9cyWo+QwGNlVKa++f2WbwZjLwSqEohFqBgP+w/w5icfLovt511GL5VxscnpGLBrVPpfbJDrm9euLbMkb7/zzjIu15UxsWMsEHCEQOKIHbXMQKzUwsXFvhCISaiUxWQ5zkHdC6tLPtbFBMyP+oFGW2wQb77k5/N91lcJ5NkQBMlVLux5Q8C6fxbeWFswFLFSgMFmGAQkVBJ5Yq/ieTuYtq9I5K+35utN7dgPNj7/9vny9CZhYyd//PGnoH5WwMaPXNNbN7kYubbMkrxLl82mB4XjvhGY+WZwbi9jVnISrIMgkAmVL4NwJgAnVjM1Nrbm5YsXF57Z/urg4K66rPIsSN5YLkDyfRs3Ysvqdfl51hAIjIB3g2qL/MmsFGmw7TUBCRXLpnT+Gz9eQxnZ+LUMzo2RDaJ5CMRLYOaz64gVn6OH7RcEJFTm2rl7cYANCEAAAhDICXg7ViV34M18gzUEfCWAUPE1ctgNAQgMQMCm0z8aoJ1emyCz0iteKu+TgETKRPWnKl5Mn98nC+qGAAQgsIHATG8AnW84581hBth6EyoMLRJAqBRpsA0BCECglICXE8CVeUI3UBkVjjlNAKHidHgwDgIQcIeA990/OUrESk6CtRcEECpehAkjIQCB8QncV/fP6fhmdGMB3UDdcKSWAQhIqByomROVWwM0RxMQgAAEfCVwJqFify+DWRhgG0wow3YkEyqpvGRW2rBDjXcQgEB7Akn7KtyqgW4gt+KBNSUEJFSmOpyqIFQEgQUCEIDAFgJBdf/kftINlJNg7SQBCZVEhjF9vpPRwSgIQMAxAsF1/+R8yazkJFg7R0BCZSajECrORQaDIAABRwkcOWpXa7MYs9IaIRX0QUBCZa56mT6/D7jUCQEIhEjggQbVpiE6Zj4hVkKNrKd+SaRMZHqqwqy0nsYQsyEAgcEJ2JT6s8FbHbBBuoEGhE1T2wkgVLbz4SwEIACBDQSSEKbU3+Db8jBiZRsdzg1GQELF5gQ4VSGjMhh1GoIABAIg8EhC5SQAP7a6QDfQVjycHIJAJlRStcWryUMApw0IQCAUAtb9k4TizDY/yKxso8O53gkgVHpHTAMQgEC4BILv/slDh1jJSbAenABCZXDkNAgBCIRDIIrunzxciJWcBOtBCSBUBsVNYxCAQFgEoun+ycOGWMlJsB6MAEJlMNQ0BAEIhEkgmu6fPHyIlZwE60EIIFQGwUwjEIBAuASi6v7Jw4hYyUmw7p2AhEo+4Rtv/fROmwYgAIEACUTX/ZPHELGSk2DdKwGESq94qRwCEIiDwCz0yd82hRGxsokMx7smMFeFTPjWNVXqgwAEYiFwJqFyHIuzq34iVlaJsN85AWVV7AN2p/OKqRACEIBAPASO4nF13VPEyjoTjnRIQEIlUXX3OqySqiAAAQjERuChsippbE4X/UWsFGmw3SkBCZUDVRht2rJTmFQGAQjETGAWs/PmO2Il9iegJ/8lVPZVdarCmz+CwAIBCECgIYH7yqosGt4bzG2IlWBC6Y4jEioTWXOiglBxJyxYAgEI+EfAXlUmOy0IiBX/Hl4fLJ7LyNs+GIqNEIAABBwmcBTrq8qrMXnj1atXq8fYh0BjAsqqzHXz3cYVcCMEIAABCBgBe1X5ABSvCZBZ4UnojICESqLKECqdEaUiCEAgYgJHEfu+5jpiZQ0JB5oQyITKl03u5R4IQAACELhCIPpXla/Q0A5iZZUI+7UJSKhYqvK49o3cAAEIQAACqwRsUO1s9WDs+4iV2J+Alv5nQiVVNbz505Ilt0MAAhAQAfv9nwUkrhJggO1VHuzVICChMtHlpyq3atzGpRCAAAQgUE6AQbXlXOgG2sCFwzsIZEIl1WUIlR2sOA0BCECgIoGjitdFdxndQNGFvL3DBaHCXCrtcVIDBCAAASPwQN0/KSjKCSBWyrlwdDsBG0yLUNnOiLMQgAAEqhJ4ogtnVS+O8TrESoxRb+Gzsipz3c5cKi0YcisEIACBFQLMVLsCZHUXsbJKhP2NBBAqG9FwAgIQgEBTAo/U/XPS9OZY7kOsxBLpln4iVFoC5HYIQAAC6wRsTpVk/TBHVgkgVlaJsL9GAKGyhoQDEIAABLogkCirct5FRaHXgVgJPcIt/UOotATI7RCAAATKCdD9U86l9ChipRQLB40AQoXnAAIQgEAvBOj+qYkVsVITWCyXI1RiiTR+QgACIxCg+6cmdMRKTWAxXI5QiSHK+AgBCIxEgO6fBuDfanAPtwRKQCJlItdSFSZ8CzTGuAUBCIxKwCZ/S0a1wNPGyax4GriuzUaodE2U+iAAAQisEaD7Zw1JtQOIlWqcgr4KoRJ0eHEOAhBwgwC//dMiDm+8evWqxe3c6jsBhIrvEcR+CEDAAwJnmk/lwAM7nTWRzIqzoenfMIRK/4xpAQIQiJ4Aryl38AggVjqA6GMVCBUfo4bNEICAhwRmyqqcemi3UybTDeRUOIYxBqEyDGdagQAEoidgrykfRk+hAwBkVjqA6FMVCBWfooWtEICAxwTo/ukweIiVDmG6XhVCxfUIYR8EIBAQgUN+pLC7aCJWumPpdE0IFafDg3EQgEBYBO5LqKRhuTSuN4xZGZf/IK0jVAbBTCMQgAAEjACvKffwHJBZ6QGqS1UiVFyKBrZAAAKBE7BxKgyo7SHIiJUeoLpSJULFlUhgBwQgEAkBm05/EYmvg7qJWBkU9+CNzdUiP0o4OHYahAAEIiRg0+mfROj3IC4zZmUQzMM3oqzKXK3eHb5lWoQABCAQHQHmU+k55GRWegY8RvUIlTGo0yYEIBApgTP5nUTq+2BuI1YGQz1MQxIqR2qJjMowuGkFAhCIm4AJlSnzqfT/ENAN1D/jwVqQUEnU2JeDNUhDEIAABOIlYG/+7CNUhnkAECvDcO69FQmVAzXyd703RAMQgAAEIGBCxTIqp6AYhgBiZRjOvbYioTJRAwuVm702ROUQgAAEIIBQGeEZYMzKCNB7aDJVnQiVHsBSJQQgAIECAYRKAcaQm4iVIWn30JayKnNVy1wqPbClSghAAAIrBGzSN7p+VqAMsYtYGYJyT21IqBypat786Ykv1UIAAhAoEPhMQuWksM/mgAQYszIg7C6bklA5VH3/vcs6qQsCEIAABEoJmFCZl57h4CAEyKwMgrnbRiRUDlTjvNtaqQ0CEIAABEoIfI5QKaEy8CEyKwMDb9uchMpEdaQqjFNpC5P7IQABCGwn8FBCJdl+CWeHIEBmZQjK3bYxV3UIlW6ZUhsEIACBVQIIlVUiI+4jVkaEX7dpZVVmuudO3fu4HgIQgAAEahGwHyZMat3Bxb0SQKz0ire7yrNxKl90VyM1QQACEIBACYEzHUtKjnNoRAKIlRHh12x6XvN6LocABCAAgXoETKjww4T1mA1yNWJlEMztGlFWJVENjFNph5G7IQABCGwjkM9Oe77tIs6NQwCxMg73uq3O6t7A9RCAAAQgUJkAQqUyqnEuRKyMw71yq1lW5VblG7gQAhCAAATqEuAXlOsSG/h6xMrAwBs0d9TgHm6BAAQgAIFqBGx22tNql3LVWAQQK2ORr9CusipTXcZYlQqsuAQCEIBAAwLMTtsA2hi3IFbGoF69zVn1S7kSAhCAAARqELBJ345rXM+lIxJguv0R4W9rOsuq/G7bNZyDAAQgAIFGBB5LqEwb3clNoxAgszIK9kqNzipdxUUQgAAEIFCHgM2lcljnBq4dnwCZlfFjsGYBWZU1JByAAAQg0AUBe0X5QFmVRReVUcdwBMisDMe6TkuzOhdzLQQgAAEIVCJgrygvKl3JRU4RQKw4FY69vSyr8qljZmEOBCAAAd8J8IqyxxFErLgXvJl7JmERBCAAAa8JmFCZe+1B5MYjVhx6AMiqOBQMTIEABEIhgFAJIJKIFbeCOHPLHKyBAAQg4DUBhIrX4bs0HrFyyWLULbIqo+KncQhAIDwCCJWAYvpWQL747srMdwewHwIQgIADBOz15EONUUkdsAUTOiJAZqUjkG2qUVYl0f28AdQGIvdCAAIQ2NuzCd/s9eQUGGERYFK4keMpoTKRCQuVmyObQvMQgAAEfCbwWMZbRuXcZyewvZwA3UDlXIY8atM+I1SGJE5bEIBAaAQeSqQkoTmFP5cE6Aa6ZDHW1nSshmkXAhCAQAAEbCBtEoAfuLCFAJmVLXAGOkXKciDQNAMBCARF4Im8sW6f06C8wplSAmRWSrEMevBk0NZoDAIQgID/BGx8iv0gIULF/1hW8oABtpUw9XuRBtkeq4V7/bZC7RCAAASCIPC5RIr9zWSJiABixZFgZ5PCWZaFwbaOxAQzIAABpwjQ7eNUOIY1hm6gYXlvbE3fFFKd3FexeQJYIAABCEDgksADbdLtc8kjui0yKw6GXFmWucy666BpmAQBCEBgSAI2G22iL3OWdWaJmABixdHgI1gcDQxmQQACQxGwQbRM8jYUbcfbQaw4HCAEi8PBwTQIQKAvApZNmTGIti+8ftaLWHE8bhIslv6847iZmAcBCECgCwI2Zs+6fU67qIw6wiHAAFv3Y5nIRPsAs0AAAhAImcADOWc/QohQCTnKDX0js9IQ3JC3KbsyUXsLFV5rHhI8bUEAAkMQsG4fBtEOQdrjNsiseBA8fdM4l5lTD0zFRAhAAAJ1CFjW2LIpJ3Vu4tr4CCBWPIl5lhr9zBNzMRMCEIDALgIPdQHdPrsocX5JgG4gzx4EdQkdy2Sm5vcsbpgLAQhcELBunyN9AZtfHGEDAjsIIFZ2AHLxtARLKrs+ddE2bIIABCCwhYB1+9j4lNMt13AKAmsE6AZaQ+LFgUNZaR96FghAAAK+EKDbx5dIOWgnmRUHg1LFJGVX9nWdfTvhDaEqwLgGAhAYiwDdPmORD6hdMiueBlNp1IVMn6rYHwIWCEAAAi4SsAywDaKdu2gcNvlDALHiT6zWLM36fac6gWBZo8MBCEBgZAIP1D5v+4wchFCapxsogEiqS+hAbqQqdAkFEE9cgIDnBOzLkw2iPfHcD8x3iABixaFgtDEFwdKGHvdCAAIdEeCXkjsCSTVXCSBWrvLweg/B4nX4MB4CPhOwbMpM2ZRjn53AdncJIFbcjU0jyxAsjbBxEwQg0JyAZVOs22fRvAruhMB2AoiV7Xy8PCvBMpXhv/PSeIyGAAR8IUA2xZdIBWAnbwMFEMRVF/QNJ9Wx36jYHxMWCEAAAl0TeKQKD+j26Ror9W0iQGZlE5kAjtMlFEAQcQECbhF4InPsd31408etuARvDZmVgEOsPyincm+qQoYl4DjjGgQGInBf7Vg2BaEyEHCauSRAZuWSRbBbZFiCDS2OQWAIAtblY9mUxRCN0QYEygggVsqoBHhMgmUit1KV2wG6h0sQgED3BOwtH3sdOe2+amqEQD0CiJV6vLy+OhMsx3LirteOYDwEINAnARuXYiJl3mcj1A2BOgQQK3VoBXKtRMuRXPltIO7gBgQg0A0BREo3HKmlBwKIlR6g+lBlNo5lLlvpFvIhYNgIgf4I2AB8y7geK5ty3l8z1AyB5gQQK83ZBXGnRMtMjlimhR9BDCKiOAGBygQQKZVRceHYBBArY0fAgfYlWPZlxkyFsSyCwAKBCAg8kI82LoVMSgTBDsFFxEoIUezIB0RLRyCpBgLuEngo00ykLNw1EcsgsE4AsbLOJPojEi0TQbCuoUTllgoLBCDgNwFEit/xi956xEr0j8B2ABIuia6w8qkKCwQg4BcBRIpf8cLaDQQQKxvAcPgqgayLKNFRK2RbBIEFAg4TQKQ4HBxMq08AsVKfWfR3SLgcCEKicqiCcBEEFgg4QMDe7pmr2CvIC61ZIBAMAcRKMKEcxxGEyzjcaRUCBQK8glyAwWaYBBArYcZ1FK8QLqNgp9F4CTyR60yLH2/8o/IcsRJVuIdzNhMuU7WYqDBLriCwQKAjAmeqx34FOe2oPqqBgPMEECvOh8h/AyVc9uWFjW+xwltFgsACgYYEHkqkJA3v5TYIeEsAseJt6Pw0XMJlIstz4XLHTy+wGgKDErBMylzlhIGzg3KnMYcIIFYcCkZspiBcYos4/tYggECpAYtLwyeAWAk/xl54WBAuRzKYMS5eRA0jOybwSPWdWFEG5bzjuqkOAl4TQKx4Hb4wjc/GuCTyzgrzuAgCS7AEECjBhhbHuiSAWOmSJnV1TkDCZapKE5W7KiwQ8J3AUzmwzJ5onZJB8T2c2D8UAcTKUKRppxWBrJsoUSVW6CYSBBZvCFwIFIkTEyosEIBATQKIlZrAuHx8Alk30aEsSVQQLuOHBAvWCdiEbamKjT9BoKzz4QgEahFArNTCxcWuEUC4uBaRaO15LM8XWTGBchotCRyHQA8EECs9QKXKcQhkXUWWcZmq2PqmCgsEuiZg3TppXhAmXeOlPgisE0CsrDPhSCAEJF4O5Mq0UBAvgcR2BDcsc5JakTixNQsEIDAgAcTKgLBpalwCmXgpChheix43JK62no83OZWBJk5szQIBCIxIALEyInyaHpdA1m2UixdbW0HAjBuWoVu3Lh0TI2m+ljg51zYLBCDgEAHEikPBwJTxCawImH1ZZAKGN47GD01XFpypogtxQtakK6zUA4F+CSBW+uVL7YEQKHQh7culqYqtycIIguNLPtZkKVDImjgeLcyDwAYCiJUNYDgMgSoEJGKmum4/K/k2IkZARlosc3KiwkDYkQJAsxDogwBipQ+q1Bk9gRURY11J+yp0J3X/ZJg4SfNC5qR7wNQIARcIIFZciAI2RENAImZfzloxATNRmarY8unrFf+WELCuHFsWWTm1NeNNRIEFApEQQKxEEmjc9INAlpExY3Mxs69tK7b4LGieyP6FOZEtab6h9SIr+SETInaMBQIQgMCSAGKFBwECHhIoiJrc+mm+UbK2DI6JH1vOVU6XW7v/STddIjGx8dymezgOAQhAoCmB/w8aa2a+2zfGKgAAAABJRU5ErkJggg=="/>
							</defs>
							</svg>						
					</div>

				</div>
			</div>
			<?php else : ?>
				<p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?></p>
			<?php endif; ?>

			<div id="comments">
				<h2 class="woocommerce-Reviews-title">
					<?php
					$count = $product->get_review_count();
					if ( $count && wc_review_ratings_enabled() ) {
						/* translators: 1: reviews count 2: product name */
						$reviews_title = sprintf( esc_html( _n( 'Review (%1$s) %2$s', 'Reviews (%1$s) %2$s', $count, 'woocommerce' ) ), esc_html( $count ), ' ' );
						echo apply_filters( 'woocommerce_reviews_title', $reviews_title, $count, $product ); // WPCS: XSS ok.
					} else {
						esc_html_e( 'Reviews', 'woocommerce' );
					}
					?>
				</h2>

				<?php if ( have_comments() ) : ?>
					<ol class="commentlist">
						<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
					</ol>

					<?php
					if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
						echo '<nav class="woocommerce-pagination">';
						paginate_comments_links(
							apply_filters(
								'woocommerce_comment_pagination_args',
								array(
									'prev_text' => is_rtl() ? '&rarr;' : '&larr;',
									'next_text' => is_rtl() ? '&larr;' : '&rarr;',
									'type'      => 'list',
								)
							)
						);
						echo '</nav>';
					endif;
					?>
				<?php else : ?>
					<p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'woocommerce' ); ?></p>
				<?php endif; ?>
			</div>

			<div class="clear"></div>
		</div>
</div>
<?php if( is_singular() ) : ?>
    <script type="text/javascript">
        const commentForm = document.getElementById('commentform');
        if (commentForm) commentForm.removeAttribute('novalidate');
    </script>
<?php endif; ?>