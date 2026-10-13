/**
 * Node.js Build Runner for Alifa Safara Landing Page
 * 
 * Penggunaan:
 *   node build.js
 */

const { execSync } = require('child_process');

console.log('📦 Menjalankan build via PHP compiler...');
try {
  const output = execSync('php build.php', { encoding: 'utf-8' });
  console.log(output);
} catch (error) {
  console.error('❌ Gagal menjalankan build:', error.message);
  process.exit(1);
}
