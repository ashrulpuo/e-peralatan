SELECT permohonan.id_permohonan, permohonan.nama_pemohon, permohonan.peralatan1 , permohonan.peralatan2, permohonan.peralatan3 FROM permohonan JOIN peralatan a ON permohonan.peralatan1 = a.no_aset JOIN peralatan b ON permohonan.peralatan2 = b.no_aset 


SELECT permohonan.id_permohonan, permohonan.nama_pemohon, a.peralatan , b.peralatan FROM permohonan JOIN peralatan b ON permohonan.peralatan1 = b.id_no JOIN peralatan a ON permohonan.peralatan2 = a.id_no 

SELECT permohonan.id_permohonan, permohonan.nama_pemohon, permohonan.peralatan1 , permohonan.peralatan2, permohonan.peralatan3, a.peralatan, b.peralatan, c.peralatan FROM permohonan JOIN peralatan a ON permohonan.peralatan1 = a.no_aset JOIN peralatan b ON permohonan.peralatan2 = b.no_aset JOIN peralatan c ON permohonan.peralatan3 = c.no_aset




<?php if ($peralatan1 && $peralatan2 == '') { ?>
														<li>
															<label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan1']; ?>"><?php echo $lists['peralatan1']; ?></label>
														</li>
													<?php } else if ($peralatan1 && $peralatan3 == '') { ?>
														<li>
															<label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan2']; ?>"><?php echo $lists['peralatan2']; ?></label>
														</li>
													<?php } else if ($peralatan2 && $peralatan1 == '') { ?>
														<li>
															<label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan3']; ?>"><?php echo $lists['peralatan3']; ?></label>
														</li>
													<?php } else if ($peralatan2 && $peralatan3 == '') { ?>
														<li>
															<label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan1']; ?>"><?php echo $lists['peralatan1']; ?></label>
														</li>
													<?php } else if ($peralatan3 && $peralatan1 == '') { ?>
														<li>
															<label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan2']; ?>"><?php echo $lists['peralatan2']; ?></label>
														</li>
													<?php } else if ($peralatan3 && $peralatan1 == '') { ?>
														<li>
															<label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan2']; ?>"><?php echo $lists['peralatan2']; ?></label>
														</li>

<!-- <?php  if ($peralatan1 == '') { ?>
														<li>
															<label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan2']; ?>"><?php echo $lists['peralatan2']; ?></label>
														</li>
														<li><label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan3']; ?>"><?php echo $lists['peralatan3']; ?></label>
														</li>
													<?php } else if ($peralatan2 == '') { ?>
														<li>
															<label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan1']; ?>"><?php echo $lists['peralatan1']; ?></label>
														</li>
														<li><label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan3']; ?>"><?php echo $lists['peralatan3']; ?></label>
														</li>
													<?php } else if ($peralatan3 == '') { ?>
														<li>
															<label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan1']; ?>"><?php echo $lists['peralatan1']; ?></label>
														</li>
														<li>
															<label><input type="checkbox" name="peraltan1" value="<?php echo $lists['peralatan2']; ?>"><?php echo $lists['peralatan2']; ?></label>
														</li>
													 -->